<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Employee;

class UserProfile extends Controller
{
    function showprofile($id){
        $employee = Employee::select('*')->where('employee_id',$id)->first();
        return view('frontend.pages.profile',['employee'=>$employee]);
    }
}
