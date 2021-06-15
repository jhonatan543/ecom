<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Brand;
use Carbon\Carbon;

class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    // ======= index page =======
    public function index(){
        $brands = Brand::latest()->get();
        return view('admin.brand.index',compact('brands'));
    }

    // ============ store brand =========
    public function Store(Request $request){
        $request->validate([
            'brand_name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/|unique:brands,brand_name'
        ]);


        Brand::insert([
            'brand_name' => $request->brand_name,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->back()->with('success','Marca Agregada Satisfactoriamente');
    }

    // =============== edit data  ==========
    public function Edit($brand_id){
        $brand = Brand::find($brand_id);
        return view('admin.brand.edit',compact('brand'));
    }

    public function Update(Request $request){


        $brand_id = $request->id;

        $request->validate([
            'brand_name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/|unique:brands,brand_name'
        ]);

        Brand::find($brand_id)->update([
            'brand_name' => $request->brand_name,
            'updated_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.brand')->with('Catupdated','Marca Actualizada');
    }


    // Delete Brand
    public function Delete($brand_id){
        Brand::find($brand_id)->delete();
        return Redirect()->back()->with('delete','Marca Borrada Satisfarctoriamente');
    }


    // status inactive
    public function Inactive($brand_id){
        Brand::find($brand_id)->update(['status' => 0]);
        return Redirect()->back()->with('Catupdated','Marca Desactivada');
    }


    // status inactive
    public function Active($brand_id){
        Brand::find($brand_id)->update(['status' => 1]);
        return Redirect()->back()->with('Catupdated','Marca Activada');
    }

}
