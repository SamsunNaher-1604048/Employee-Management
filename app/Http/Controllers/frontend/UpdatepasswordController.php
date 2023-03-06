<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Models\User;

class UpdatepasswordController extends Controller
{
    function updatepassword(Request $req){
        $user = User::find(Auth::user()->id);

        if(Hash::check($req->current_password, Auth::user()->password)){
             $user->password = Hash::make($req->update_password);
             $user->save();
            return redirect()->route('profile.show' , Auth::user()->employee_id);

        }
        else{
            //return redirect()->route('password.update',['msg'=>'Incorrect Current Password']);
            return 'not success';

        } 
    }
}
