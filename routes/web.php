<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/','FontendController@index');

Auth::routes();

//PDF
Route::get('/admin/pdf', 'PDFController@PDF')->name('descargarPDF');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'UserController@index1');



// =========================== Admin Route ===========================
// ====================== Usuarios ===============
Route::get('admin/users','UserController@index')->name('admin.user');
Route::post('admin/users/delete/{us_id}','UserController@Delete');
Route::post('admin/users-store','UserController@StoreUs')->name('store.user');
Route::get('admin/users/edit/{us_id}','UserController@Edit');
Route::post('admin/users-update','UserController@UpdateUs')->name('update.user');
Route::post('home','UserController@UpdateUs1')->name('update.user1');
Route::get('admin/users/inactive/{us_id}','UserController@Inactive');
Route::get('admin/users/active/{us_id}','UserController@Active');
//              gestionar admins

/* Route::get('admin/admins','AdminController@index1')->name('admin.admin');
 Route::post('admin/admins/delete/{ad_id}','AdminController@Delete');
Route::post('admin/admins-store','AdminController@StoreUs')->name('store.admin');
Route::get('admin/admins/edit/{ad_id}','AdminController@Edit');
Route::post('admin/admins-update','AdminController@UpdateUs')->name('update.admin');
Route::get('admin/admins/inactive/{ad_id}','AdminController@Inactive');
Route::get('admin/admins/active/{ad_id}','AdminController@Active');

Route::get('/admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin','Admin\LoginController@Login');

*/


// category section
Route::get('admin/categories','Admin\CategoryController@index')->name('admin.category');
Route::post('admin/categories-store','Admin\CategoryController@StoreCat')->name('store.category');
Route::get('admin/categories/edit/{cat_id}','Admin\CategoryController@Edit');
Route::post('admin/categories-update','Admin\CategoryController@UpdateCat')->name('update.category');
Route::post('admin/categories/delete/{cat_id}','Admin\CategoryController@Delete');
Route::get('admin/categories/inactive/{cat_id}','Admin\CategoryController@Inactive');
Route::get('admin/categories/active/{cat_id}','Admin\CategoryController@Active');
// ====================== Brand ===============
Route::get('admin/brand','Admin\BrandController@index')->name('admin.brand');
Route::post('admin/brand-store','Admin\BrandController@Store')->name('store.brand');
Route::get('admin/brand/edit/{brand_id}','Admin\BrandController@Edit');
Route::post('admin/brand-update','Admin\BrandController@Update')->name('update.brand');
Route::post('admin/brand/delete/{brand_id}','Admin\BrandController@Delete');
Route::get('admin/brand/inactive/{brand_id}','Admin\BrandController@Inactive');
Route::get('admin/brand/active/{brand_id}','Admin\BrandController@Active');


// ============================= Products ============================
Route::get('admin/products/add','Admin\ProductController@addProduct')->name('add-products');
Route::post('admin/products/store','Admin\ProductController@storeProduct')->name('store-products');
Route::get('admin/products/manage','Admin\ProductController@manageProduct')->name('manage-products');
Route::get('admin/products/edit/{proudct_id}','Admin\ProductController@editProduct');
Route::post('admin/products/update','Admin\ProductController@updateProduct')->name('update-products');
Route::post('admin/products/image-update','Admin\ProductController@updateImage')->name('update-image');
Route::get('admin/products/delete/{product_id}','Admin\ProductController@destroy');
Route::get('admin/products/inactive/{product_id}','Admin\ProductController@Inactive');
Route::get('admin/products/active/{product_id}','Admin\ProductController@Active');
// ======================= coupon =============================
Route::get('admin/coupon','Admin\CouponController@index')->name('admin.coupon');
Route::post('admin/coupon-store','Admin\CouponController@Store')->name('store.coupon');
Route::get('admin/coupon/edit/{coupon_id}','Admin\CouponController@couponEdit');
Route::post('admin/coupon-update','Admin\CouponController@update')->name('update.coupon');
Route::post('admin/coupon/delete/{coupon_id}','Admin\CouponController@couponDelete');
Route::get('admin/coupon/inactive/{coupon_id}','Admin\CouponController@Inactive');
Route::get('admin/coupon/active/{coupon_id}','Admin\CouponController@Active');
//================= order ============
Route::get('admin/orders','Admin\CouponController@orderIndex')->name('admin.orders');
Route::get('admin/orders/view/{id}','Admin\CouponController@viewOrder');
Route::get('admin/orders/inactive/{or_id}','Admin\CouponController@Inac');
Route::get('admin/orders/active/{or_id}','Admin\CouponController@Acti');
Route::get('admin/orders/espera/{or_id}','Admin\CouponController@Esp');
Route::post('admin/orders/delete/{or_id}','Admin\CouponController@orderDelete');
//================= PDF ============
Route::get('admin/orders/pdf/{id}','Admin\CouponController@orderIndex1');


// =========================== fontend routes ===================
// ================= cart ============
Route::post('add/to-cart/{prouct_id}','CartController@addToCart');
Route::get('cart','CartController@cartPage');
Route::get('cart/destroy/{cart_id}','CartController@destroy');
Route::post('cart/quantity/update/{cart_id}','CartController@quantityUpdate');
Route::post('coupon/apply','CartController@applyCoupon');
Route::get('coupon/destroy','CartController@couponDestroy');
// ================= wishlist ============
Route::get('add/to-wishlist/{prouct_id}','WishlistController@addToWishlist');
Route::get('wishlist','WishlistController@wishPage');
Route::get('wishlist/destroy/{wishlist_id}','WishlistController@destroy');
//REDIRIGIR CARRITO Y DESEOS
Route::get('ver/carrito/','CartController@verCarrito');
Route::get('ver/deseo/','WishlistController@verDeseo');
// ESTADISTICAS

/* Route::get('admin/home','CartController@cartPage1'); */

//shop page rotues
Route::get('shop','FontendController@shopPage')->name('shop.page');
//categorywise product show
Route::get('category/product-show/{id}','FontendController@catWiseProduct');
//footer
Route::get('sobre','FontendController@sobre')->name('sobre');
Route::get('mision','FontendController@mision')->name('mision');
Route::get('terminos','FontendController@terminos')->name('terminos');

// ============= product details ============
Route::get('product/details/{product_id}','FontendController@productDetail');

// checkout page
Route::get('checkout','CheckoutController@index');
Route::post('place/order','OrderController@storeOrder')->name('place-order');
Route::get('order/success','OrderController@orderSuccess');

//usr routes
Route::get('user/order','UserController@order')->name('user.order');
Route::get('user/order-view/{id}','UserController@orderView');
Route::get('user/orders-pdf/{id}','UserController@verPDF');


//login router
Route::get('login/compro','UserController@Comprobar')->name('login.comprobacion');


