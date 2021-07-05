<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Order;
use App\Product;
use App\OrderItem;
use App\Shipping;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function storeOrder(Request $request){

        $request->validate([
            'shipping_first_name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
            'shipping_last_name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
            'shipping_phone' => 'required|regex:/^([0-9][ -]*){9}+$/',
            'shipping_dni' => 'required|regex:/^([0-9][ -]*){8}+$/',
            'address' => 'required|min:3|max:100',
            'payment_type' => 'required',
        ]);

        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'invoice_no' => mt_rand(10000000,99999999),
            'payment_type' => $request->payment_type,
            'total' => $request->total,
            'subtotal' => $request->subtotal,
            'coupon_discount' => $request->coupon_discount,
            'created_at' => Carbon::now(),
        ]);

        $carts = Cart::where('user_ip',request()->ip())->latest()->get();
            foreach ($carts as $cart ) {

                OrderItem::insert([
                    'order_id' => $order_id,
                    'product_id' => $cart->product_id,
                    'product_qty' => $cart->qty,
                    'created_at' => Carbon::now(),
                ]);

                Product::where('id',$cart->product_id)->update([
                    'product_quantity' => $cart->qtyproduct - $cart->qty,
                ]);

            }



            Shipping::insert([
                'order_id' => $order_id,
                'shipping_first_name' => $request->shipping_first_name,
                'shipping_last_name' => $request->shipping_last_name,
                'shipping_email' => $request->shipping_email,
                'shipping_phone' => $request->shipping_phone,
                'shipping_dni' => $request->shipping_dni,
                'address' => $request->address,
                'state' => $request->state,
                'post_code' => $request->post_code,
                'created_at' => Carbon::now(),
            ]);

            if (Session::has('coupon')) {
                session()->forget('coupon');
             }

         Cart::where('user_ip',request()->ip())->delete();


            return Redirect()->to('order/success')->with('orderComplete','Su pedido se realizó con éxito');

    }

    public function orderSuccess(){
        return view('pages.order-complete');
    }
}
