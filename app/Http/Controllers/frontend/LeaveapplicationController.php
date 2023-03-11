<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Employee;
use Auth;

class LeaveapplicationController extends Controller
{
    function showapplication(Request $req){


         $employee = Employee::select('*')->where('employee_id', Auth::user()->employee_id)->first();
         return view ('frontend.pages.applicationfrom',['data'=>$req,'employee'=>$employee]);
    }
}
