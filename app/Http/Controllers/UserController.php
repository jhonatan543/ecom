<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use App\Product;
use App\OrderItem;
use App\Shipping;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function order(){
        $orders = Order::where('user_id',Auth::id())->latest()->get();
        return view('pages.profile.order',compact('orders'));
    }

    // order view
    public function orderView($order_id){
        $order = Order::findOrFail($order_id);
        $orderitems = OrderItem::with('product')->where('order_id',$order_id)->get();
        $shipping = Shipping::where('order_id',$order_id)->first();
        return view('pages.profile.order-view',compact('order','orderitems','shipping'));
    }
//VER PDF USER
    public function verPDF($order_id){

        $order = Order::findOrFail($order_id);
        $orderItems = OrderItem::where('order_id',$order_id)->get();
        $shipping = Shipping::where('order_id',$order_id)->first();
        $pdf = \PDF::loadView('pages.profile.order-pdf',compact('order','orderItems','shipping'));

        return $pdf->stream('pedidousuarioacomsiv.pdf') ;

    }

    public function index(){
        $users = User::latest()->get();
        return view('admin.user.index',compact('users'));
    }

    public function index1(){

        $products = Product::latest()->get();

        $orders = Order::latest()->get();
        $tiempo = mt_rand(1,3);

        return view('admin.home',compact('orders','tiempo','products'));
    }

// Delete category
    public function Delete($us_id){
        User::find($us_id)->delete();
        return Redirect()->back()->with('delete','Usuario Borrado Satisfactoriamente');
    }

    // ============ store category =========
    public function StoreUs(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
            'email' => ['required','email',Rule::unique('users','email')],
            'status' => 'required',
            'password' => 'required|min:5'
        ]);


        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()
        ]);

        return Redirect()->back()->with('success','Usuario Agregado');
    }

    // ========= edit category data
    public function Edit($us_id){
        $user = User::find($us_id);
        return view('admin.user.edit',compact('user'));
    }

    // ============ UpdateCat category =========
    public function UpdateUs(Request $request){
        $us_id = $request->id;

        $request->validate([
            'name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
            'email' => 'required',
            'status' => 'required',
        ]);

        User::find($us_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'status' => $request->status,
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.user')->with('Usupdated','Usuario Editado');
    }

    public function UpdateUs1(Request $request){
        $us_id = $request->id;

        $request->validate([
            'name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
            'email' => 'required',
            'password' => 'required|min:5'
        ]);

        User::find($us_id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('home')->with('Usupdated1','Perfil Editado');
    }

 // status inactive
 public function Inactive($us_id){
    User::find($us_id)->update(['status' => 1]);
    return Redirect()->back()->with('Usupdated','Usuario Cliente');
}


// status inactive
public function Active($us_id){
    User::find($us_id)->update(['status' => 2]);
    return Redirect()->back()->with('Usupdated','Usuario Administrador');
}

// status inactive
public function Comprobar(Request $request){


    if (Auth::user()->status == 2) {
        return Redirect()->to('admin/home')->with('Usupdated1','Tiene Permisos');
    }else{
        return Redirect()->back()->with('confirmuser','Usted No Tiene Permisos');
    }

}

}
