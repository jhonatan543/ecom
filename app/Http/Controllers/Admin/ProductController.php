<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


// --------------------- add product ------------------
    public function addProduct(){
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        return view('admin.product.add',compact('categories','brands'));
    }


    // ===================== store products ==================
    public function storeProduct(Request $request){

        $request->validate([
            'product_name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
            'product_code' => 'required|regex:/^([0-9][ -]*)+$/',
            'price' => 'required|regex:/^([0-9][ -]*)+$/',
            'product_quantity' => 'required|regex:/^([0-9][ -]*)+$/',
            'category_id' => 'required|max:255',
            'brand_id' => 'required|max:255',
            'short_description' => 'required|min:3|max:50',
            'long_description' => 'required|min:3|max:100',
            'image_one' => 'required|mimes:jpg,jpeg,png,gif',
            'image_two' => 'required|mimes:jpg,jpeg,png,gif',
            'image_three' => 'required|mimes:jpg,jpeg,png,gif',
        ],[
            'category_id.required' => 'select category name',
            'brand_id.required' => 'select brand name',
        ]);

        $imag_one = $request->file('image_one');
        $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
        Image::make($imag_one)->resize(270,270)->save('fontend/img/product/upload/'.$name_gen);
        $img_url1 = 'fontend/img/product/upload/'.$name_gen;

        $imag_two = $request->file('image_two');
        $name_gen = hexdec(uniqid()).'.'.$imag_two->getClientOriginalExtension();
        Image::make($imag_two)->resize(270,270)->save('fontend/img/product/upload/'.$name_gen);
        $img_url2 = 'fontend/img/product/upload/'.$name_gen;

        $imag_three = $request->file('image_three');
        $name_gen = hexdec(uniqid()).'.'.$imag_three->getClientOriginalExtension();
        Image::make($imag_three)->resize(270,270)->save('fontend/img/product/upload/'.$name_gen);
        $img_url3 = 'fontend/img/product/upload/'.$name_gen;

        Product::insert([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ','-',$request->product_name)),
            'product_code' => $request->product_code,
            'price' => $request->price,
            'product_quantity' => $request->product_quantity,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'image_one' => $img_url1,
            'image_two' => $img_url2,
            'image_three' => $img_url3,
            'created_at' => Carbon::now(),
        ]);

        return Redirect()->back()->with('success','Product Added');

    }

    // ======================== manage products ========================
    public function manageProduct(){
        $products = Product::orderBy('id','DESC')->get();
        return view('admin.product.manage',compact('products'));
    }

    // ======================== edit product ===========
    public function editProduct($product_id){
        $product = Product::findOrFail($product_id);
        $categories = Category::latest()->get();
        $brands = Brand::latest()->get();
        return view('admin.product.edit',compact('product','categories','brands'));
    }


    // ======================== update data ===========================
    public function updateProduct(Request $request){
        $product_id = $request->id;

        $request->validate([
            'product_name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
            'product_code' => 'required|regex:/^([0-9][ -]*)+$/',
            'price' => 'required|regex:/^([0-9][ -]*)+$/',
            'product_quantity' => 'required|regex:/^([0-9][ -]*)+$/',
            'category_id' => 'required|max:255',
            'brand_id' => 'required|max:255',
            'short_description' => 'required|min:3|max:50',
            'long_description' => 'required|min:3|max:100',
        ],[
            'category_id.required' => 'select category name',
            'brand_id.required' => 'select brand name',
        ]);

        Product::findOrFail($product_id)->Update([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ','-',$request->product_name)),
            'product_code' => $request->product_code,
            'price' => $request->price,
            'product_quantity' => $request->product_quantity,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'update_at' => Carbon::now(),
        ]);

        return Redirect()->route('manage-products')->with('success','Product successfully Updated');
    }

    // ----------- update image =--------------
    public function updateImage(Request $request){
        $product_id = $request->id;
        $old_one = $request->img_one;
        $old_two = $request->img_two;
        $old_three = $request->img_three;

        $request->validate([
            'image_one' => 'required|mimes:jpg,jpeg,png,gif',
            'image_two' => 'required|mimes:jpg,jpeg,png,gif',
            'image_three' => 'required|mimes:jpg,jpeg,png,gif',
        ]);

        if ($request->has('image_one') && $request->has('image_two')) {
            unlink($old_one);
            unlink($old_two);
            $imag_one = $request->file('image_one');
             $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
             Image::make($imag_one)->resize(270,270)->save('fontend/img/product/upload/'.$name_gen);
             $img_url1 = 'fontend/img/product/upload/'.$name_gen;

             Product::findOrFail($product_id)->update([
                 'image_one' => $img_url1,
                 'updated_at' => Carbon::now(),
             ]);

             $imag_one = $request->file('image_two');
             $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
             Image::make($imag_one)->resize(270,270)->save('fontend/img/product/upload/'.$name_gen);
             $img_url1 = 'fontend/img/product/upload/'.$name_gen;

             Product::findOrFail($product_id)->update([
                 'image_two' => $img_url1,
                 'updated_at' => Carbon::now(),
             ]);


             return Redirect()->route('manage-products')->with('success','image successfully Updated');
         }

        if ($request->has('image_one')) {
           unlink($old_one);
           $imag_one = $request->file('image_one');
            $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
            Image::make($imag_one)->resize(270,270)->save('fontend/img/product/upload/'.$name_gen);
            $img_url1 = 'fontend/img/product/upload/'.$name_gen;

            Product::findOrFail($product_id)->update([
                'image_one' => $img_url1,
                'updated_at' => Carbon::now(),
            ]);

            return Redirect()->route('manage-products')->with('success','Imagen Actualizada');
        }

        if ($request->has('image_two')) {
            unlink($old_two);
            $imag_one = $request->file('image_two');
             $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
             Image::make($imag_one)->resize(270,270)->save('fontend/img/product/upload/'.$name_gen);
             $img_url1 = 'fontend/img/product/upload/'.$name_gen;

             Product::findOrFail($product_id)->update([
                 'image_two' => $img_url1,
                 'updated_at' => Carbon::now(),
             ]);

             return Redirect()->route('manage-products')->with('success','Imagen Actualizada');
         }

         if ($request->has('image_three')) {
            unlink($old_three);
            $imag_one = $request->file('image_three');
             $name_gen = hexdec(uniqid()).'.'.$imag_one->getClientOriginalExtension();
             Image::make($imag_one)->resize(270,270)->save('fontend/img/product/upload/'.$name_gen);
             $img_url1 = 'fontend/img/product/upload/'.$name_gen;

             Product::findOrFail($product_id)->update([
                 'image_three' => $img_url1,
                 'updated_at' => Carbon::now(),
             ]);

             return Redirect()->route('manage-products')->with('success','Imagen Actualizada');
         }
    }

    // ============= delete product =============
    public function destroy($product_id){
        $image = Product::findOrFail($product_id);
        $img_one = $image->image_one;
        $img_two = $image->image_two;
        $img_three = $image->image_three;
        unlink($img_one);
        unlink($img_two);
        unlink($img_three);

        Product::findOrFail($product_id)->delete();
        return Redirect()->back()->with('delete','Producto Borrado');
    }

     // status inactive
     public function Inactive($product_id){
        Product::findOrFail($product_id)->update(['status' => 0]);
        return Redirect()->back()->with('status','Product inactive');
    }


    // status active
    public function Active($product_id){
        Product::findOrFail($product_id)->update(['status' => 1]);
        return Redirect()->back()->with('status','Product Activated');
    }
}
