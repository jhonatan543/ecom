<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Admin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*     public function __construct()
    {
        $this->middleware('auth:admin');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }

    public function index1(){
        $admins = Admin::latest()->get();
        return view('admin.admin.index',compact('admins'));
    }

    public function Logout(){
        Auth::logout();
        return Redirect()->route('admin.login');
    }

    // Delete category
    public function Delete($ad_id){
        Admin::find($ad_id)->delete();
        return Redirect()->back()->with('delete','Administrador Borrado Satisfactoriamente');
    }

    // ============ store category =========
    public function StoreUs(Request $request){
        $request->validate([
            'name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
            'email' => ['required','email',Rule::unique('admins','email')],
            'password' => 'required|min:5'
        ]);


        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()
        ]);

        return Redirect()->back()->with('success','Administrador Agregado');
    }

   // ========= edit category data
   public function Edit($ad_id){
    $admin = Admin::find($ad_id);
    return view('admin.admin.edit',compact('admin'));
}

// ============ UpdateCat category =========
public function UpdateUs(Request $request){
    $ad_id = $request->id;

    $request->validate([
        'name' => 'required|min:3|max:30|regex:/^[A-Z,a-z][A-Z,a-z, ]+$/',
        'email' => 'required',
    ]);

    Admin::find($ad_id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'updated_at' => Carbon::now()
    ]);

    return Redirect()->route('admin.admin')->with('Usupdated','Administrador Editado');
}



 // status inactive
 public function Inactive($ad_id){
    Admin::find($ad_id)->update(['status' => 0]);
    return Redirect()->back()->with('Usupdated','Administrador Inactivo');
}


// status inactive
public function Active($ad_id){
    Admin::find($ad_id)->update(['status' => 1]);
    return Redirect()->back()->with('Usupdated','Administrador Activado');
}

}
