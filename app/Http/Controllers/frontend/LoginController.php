<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    function userlogin(){
        return view('frontend.pages.login');
    }


    function loginauth(Request $req){

        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if(Auth::user()->type == "user"){
                return redirect()->route('profile.show',Auth::user()->employee_id);
            }
            else{
                return redirect()->route('user.login');
            }
        }
        else{
            return redirect()->route('user.login');
        }
 
    }

    function logout(){
        Auth::logout();
        return redirect()->route('user.login');
    }
}
