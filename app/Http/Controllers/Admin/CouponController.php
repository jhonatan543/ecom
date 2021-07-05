<?php

namespace App\Http\Controllers\Admin;

use App\Coupon;
use App\Http\Controllers\Controller;
use App\Order;
use App\OrderItem;
use App\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

   public function index(){
       $coupons = Coupon::latest()->get();
       return view('admin.coupon.index',compact('coupons'));
   }

//    ============= coupon store =========
   public function Store(Request $request){
    $request->validate([
        'coupon_name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/|unique:categories,category_name',
        'discount' => 'required|max:2|regex:/^([0-9][ -]*)+$/',
    ]);

       Coupon::insert([
        'coupon_name' => $request->coupon_name,
        'discount' => $request->discount,
        'created_at' => Carbon::now(),
       ]);

       return Redirect()->back()->with('success','Cupón Agregado Satisfactoriamente');
   }

   public function couponEdit($coupon_id){
       $coupon = Coupon::findOrFail($coupon_id);
       return view('admin.coupon.edit',compact('coupon'));
   }

   public function update(Request $request){
       $coupon_id = $request->id;

       $request->validate([
        'coupon_name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/|unique:categories,category_name',
        'discount' => 'required|max:2|regex:/^([0-9][ -]*)+$/',
    ]);

    Coupon::findOrFail($coupon_id)->update([
        'coupon_name' => $request->coupon_name,
        'discount' => $request->discount,
        'updated_at' => Carbon::now(),
       ]);

       return Redirect()->route('admin.coupon')->with('status','Cupón Actualizado');
   }

   public function couponDelete($coupon_id){
       Coupon::findOrFail($coupon_id)->delete();
       return Redirect()->back()->with('delete','Cupón Borrado');
   }


    // status inactive
    public function Inactive($coupon_id){
        Coupon::find($coupon_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Cupón Inactivo');
    }


    // status inactive
    public function Active($coupon_id){
        Coupon::find($coupon_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Cupón Activado');
    }


    // =================== Order ==========================
    public function orderIndex(){
        $orders = Order::latest()->get();
        return view('admin.order.index',compact('orders'));
    }

    public function orderIndex1($order_id){

        $order = Order::findOrFail($order_id);
        $orderItems = OrderItem::where('order_id',$order_id)->get();
        $shipping = Shipping::where('order_id',$order_id)->first();
        $pdf = \PDF::loadView('admin.order.pdf',compact('order','orderItems','shipping'));
        return $pdf->stream('pedidoadminacomsiv.pdf') ;
    }

    //view orders //
    public function viewOrder($order_id){
        $order = Order::findOrFail($order_id);
        $orderItems = OrderItem::where('order_id',$order_id)->get();
        $shipping = Shipping::where('order_id',$order_id)->first();
        return view('admin.order.view',compact('order','orderItems','shipping'));
    }

    // status inactive ORDER
    public function Inac($or_id){
        Order::find($or_id)->update(['status' => 0]);
        return Redirect()->back()->with('statusrojo','Pedido Pendiente');
    }


    // status active ORDER
    public function Acti($or_id){
        Order::find($or_id)->update(['status' => 2]);
        return Redirect()->back()->with('statusfinalizado','Pedido Finalizado');
    }

    // status espera ORDER
    public function Esp($or_id){
        Order::find($or_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Pedido Revisado');
    }


    public function orderDelete($or_id)
{
    Order::findOrFail($or_id)->delete();

    return Redirect()->back()->with('delete','Pedido Borrado Satisfactoriamente');
}

    /* public function orderDelete($or_id){
        Order::findOrFail($or_id)->delete();
        return Redirect()->back()->with('delete','Pedido Borrado Satisfactoriamente');
    } */



}
