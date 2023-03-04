<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Department;
use App\Models\Company;
use App\Models\Employee;

class DrpatmentController extends Controller
{
    function createdepartment(){
        $companys = Company::select('name')->where('status', 1)->get();
        $employees = Employee::select('name')->where('status',1)->where('designation','1')->get();

       return view('backend.pages.createdepartment',['companys'=>$companys,'employees'=>$employees]);
    }

    function storedepartment(Request $req){
        $department = New Department;

        $department->company_id = $req->company_id;
        $department->name = $req->name;
        $department->slug = str_replace(" ","_", $req->name);
        $department->status = $req->status;
        $department->head_of_dep = $req->head_of_dep;
        $department->save();
        return redirect()->route('department.show');
    }

    function showdepartment(){
        $departments = Department::all();
        return view('backend.pages.showdepartment',['datas'=>$departments]);
    }

    function editdepartment($id){
        $department = Department::find($id);
        $companys = Company::select('name')->where('status', 1)->get();
        $employees = Employee::select('name')->where('status',1)->where('designation','1')->get();

        return view('backend.pages.editdepartment',['data'=>$department,'companys'=>$companys,'employees'=>$employees]);
    }

    function updatedepartment(Request $req,$id){
        $department = Department::find($id);
        
        $department->company_id = $req->company_id;
        $department->name = $req->name;
        $department->slug = str_replace(" ","_", $req->name);
        $department->status = $req->status;
        $department->head_of_dep = $req->head_of_dep;
        $department->save();
        return redirect()->route('department.show');

    }


}
