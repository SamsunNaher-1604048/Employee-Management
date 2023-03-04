<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminloginController extends Controller
{
    function adminlogin(){
        return view('backend.pages.adminlogin');
    }

    function adminauth(Request $req){
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            if(Auth::guard('admin')->user()->type != "user"){
                return redirect()->route('dashboard.show');
            }
            else{

                return redirect()->route('admin.login');
            }
        }
        else{
            return redirect()->route('admin.login');

        }
    }

   
    function adminlogout(){
        Auth::guard('admin')->logout();
        return view('backend.pages.adminlogin');
    }
}
