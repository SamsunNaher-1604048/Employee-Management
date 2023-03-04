<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class RegistationController extends Controller
{
    function registation(){
        return view('frontend.pages.registration');
    }

    function storeregistation(Request $req){
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();

        return redirect()->route('user.login');
    }
}
