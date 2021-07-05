<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Coupon;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request,$product_id){

        $check = Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->first();
        if (Auth::check() && $check) {
            Cart::where('product_id',$product_id)->where('user_ip',request()->ip())->increment('qty');
            return Redirect()->back()->with('cart','Producto Agregado en el Carrito');
        }elseif(Auth::check() == false){
            return Redirect()->route('login')->with('loginError','Primero Inicia Sesión en su Cuenta');

            }else{
            Cart::insert([
                'product_id' => $product_id,
                'qty' => 1,
                'qtyproduct' => $request->qtyproduct,
                'price' => $request->price,
                'user_ip' => request()->ip(),
            ]);
            return Redirect()->back()->with('cart','Producto Agregado en el Carrito');
        }

    }

    public function verCarrito(){
        if (Auth::check() == true) {

            return Redirect('/cart');

        }else{
            return Redirect()->route('login')->with('loginError','Primero Inicia Sesión en su Cuenta');

            }
        }


    // -------------- cart page --------------------
    public function cartPage(){

        $carts = Cart::where('user_ip',request()->ip())->latest()->get();

        $subtotal = Cart::all()->where('user_ip',request()->ip())->sum(function($t){
            if ($t->qty < $t->product->product_quantity) {
                return $t->price * $t->qty;
            }else{
            }
         });
        return view('pages.cart',compact('carts','subtotal'));

    }

   /*  public function cartPage1(){


        $products = Product::latest()->get();

        $orders = Order::latest()->get();
        $tiempo = mt_rand(1,3);

        return view('admin.home',compact('orders','tiempo','products'));
    } */

    // --------- cart destroy ------
    public function destroy($cart_id){
        Cart::where('id',$cart_id)->where('user_ip',request()->ip())->delete();
        return Redirect()->back()->with('cart_delete','Producto quitado del carrito');
    }

    // ------------- cart quantity update -----------

    public function quantityUpdate(Request $request,$cart_id){

        if($request->qty <= 5 && $request->qty >= 1){
            Cart::where('id',$cart_id)->where('user_ip',request()->ip())->update([
                'qty' => $request->qty,
            ]);



            return Redirect()->back()->with('cart_update','Cantidad Aceptada');
        }else{
            Cart::where('id',$cart_id)->where('user_ip',request()->ip())->update([
                'qty' => 0,
            ]);
            return Redirect()->back()->with('cart_update1','Cantidad Excesiva , Maximo Permitido : 5');
        }

    }


    // --------------- coupon applied =------------
    public function applyCoupon(Request $request){
        $check = Coupon::where('status',1)
        ->where('coupon_name',$request->coupon_name)
        ->first();
    if ($check) {
        $subtotal = Cart::all()->where('user_ip', request()->ip())->sum(function ($t) {
            if ($t->qty < $t->product->product_quantity) {
                return $t->price * $t->qty;
            } else {
            }
        });
        Session::put('coupon', [
                'coupon_name' => $check->coupon_name,
                'coupon_discount' => $check->discount,
                'discount_amount' => $subtotal * ($check->discount/100),
            ]);
        return Redirect()->back()->with('cart_update', 'Cupón Aplicado Satisfactoriamente');
    } else {
        return Redirect()->back()->with('cart_delete', 'Cupón Invalido o Inactivo');
    }

    }

    // coupon destroy
    public function couponDestroy(){
        if (Session::has('coupon')) {
           session()->forget('coupon');
           return Redirect()->back()->with('cart_delete','Cupón Quitado Correctamente');
        }

    }

}
