<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Employee;
use App\Models\Leave_apply;
use App\Models\Leave_approve;
use App\Models\Department;

class LeaveapplyController extends Controller
{
    function storeleave(Request $req){
        $leave_apply = new Leave_apply;
        $leave_approve = new Leave_approve;
        $employee = Employee::select('*')->where('employee_id','=',Auth::user()->employee_id)->first();
        $department_head = Department::select('head_of_dep')->where('name',$employee->department_id)->first();
        $hr = Employee::select('name')->where('designation','HR')->first();


        $leave_apply->name = $employee->name;
        $leave_apply->employee_id = $employee->employee_id;
        $leave_apply->designation = $employee->designation;
        $leave_apply->department_id = $employee->department_id;
        $leave_apply->repoting_boss = $employee->repoting_boss;
        $leave_apply->leave_day = $req->leave_day ;
        $leave_apply->from_date	= $req->from_date;
        $leave_apply->to_date = $req->to_date;
        $leave_apply->date_to_join = $req->date_to_join;
        $leave_apply->leave_type = $req->leave_type;
        $leave_apply->resone =$req->resone;


        $leave_approve->leave_id = $employee->employee_id;
        $leave_approve->reporting_boss = $employee->repoting_boss;
        $leave_approve->department_head = $department_head->head_of_dep;
        $leave_approve->hr = $hr->name;

        $leave_approve->save();
        $leave_apply->save();
        return redirect()->route('profile.show',Auth::user()->employee_id);
    }
}
