<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function dashboard(){
        return view('admin.dashboard');
    }





    // public function dashboard(Request $request){
    //     $admin_email= $request->admin_email;
    //     $admin_password= md5($request->admin_password);

    //     $result = Admin::where('admin_email',$admin_email)->orWhere('admin_password',$admin_password)->first();

    //     dd($result);





    // }

    // public function admin(){
    //     return view('admin.login');
    // }
}
