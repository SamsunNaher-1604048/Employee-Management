<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Department;
use App\Models\Employee;

class DashboardController extends Controller
{
    function showdashboard(){

        $company = Company::all()->count();
        $department = Department::all()->count();
        $employee = Employee::all()->count();
        
        return view('backend.pages.dashboard',['company'=>$company,'department'=>$department,'employee'=>$employee]);
    }
}
