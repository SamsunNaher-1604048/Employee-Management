<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Hash;


class EmployeeController extends Controller
{
    function createmployee(){
        $departments = Department::select('name')->where('status',1)->get();
        $companys = Company::select('name')->where('status',1)->get();
        $rep_boss = Employee::select('name')->where('status',1)->get();
        return view('backend.pages.createmployee',['departments'=>$departments ,"companys"=>$companys ,'rep_boss'=>$rep_boss]);
    }

    function stortemployee(Request $req){
        $employee = new Employee;

        // for employee table
        $employee->employee_id = $req->employee_id;
        $employee->name = $req->name;
        $employee->email = $req->email;
        $employee->phone = $req->phone;
        $employee->date_of_birth = $req->date_of_birth;
        $employee->gender = $req->gender;
        $employee->company_id = $req->company_id;
        $employee->department_id = $req->department_id;
        $employee->designation = $req->designation;
        $employee->status = $req->status;
        $employee->repoting_boss =$req->repoting_boss;


        // image
        $file = $req->file('profile_pic');
        $orgname = $file->getClientOriginalName();
        $path = 'employee/profile_pic/';
        $file -> move($path,$orgname);
        $employee->profile_pic = $path.$orgname;

        // cv
        $file = $req->file('cv');
        $orgname = $file->getClientOriginalName();
        $path = 'employee/cv/';
        $file -> move($path,$orgname);
        $employee->cv = $path.$orgname;

        $employee->save();

        // for user table
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->employee_id = $req->employee_id;
        $user->password = Hash::make($req->password);
        $user->save();


        return redirect()->route('employee.show');

        
    }

    function showemployee(){
        $employees = Employee::all();
        return view('backend.pages.showemployee',['datas'=>$employees]);
    }

    function editemployee($id){
        $employee = Employee::find($id);
        $departments = Department::select('name')->where('status',1)->get();
        $companys = Company::select('name')->where('status',1)->get();
        $rep_boss = Employee::select('name')->where('status',1)->where('id','!=',$id)->get();
        return view('backend.pages.editemployee',['data'=>$employee,'departments'=>$departments,'companys'=>$companys,'rep_boss'=>$rep_boss]);
    }

    
     function updatemployee(Request $req,$id){
        $employee = Employee::find($id);
        $employee->employee_id = $req->employee_id;
        $employee->name = $req->name;
        $employee->email = $req->email;
        $employee->phone = $req->phone;
        $employee->date_of_birth = $req->date_of_birth;
        $employee->gender = $req->gender;
        $employee->company_id = $req->company_id;
        $employee->department_id = $req->department_id;
        $employee->designation = $req->designation;
        $employee->status = $req->status;

        // profile pic

        if($req->hasFile('profile_pic')){

            unlink($employee->profile_pic);
            $file = $req->file('profile_pic');
            $orgname = $file->getClientOriginalName();
            $path = 'employee/profile_pic/';
            $file -> move($path,$orgname);
            $employee->profile_pic = $path.$orgname;

        }
        else{
            $employee->profile_pic = $employee->profile_pic ;
        }

        //cv
        if($req->hasFile('cv')){

            unlink($employee->cv);
            $file = $req->file('cv');
            $orgname = $file->getClientOriginalName();
            $path = 'employee/cv/';
            $file -> move($path,$orgname);
            $employee->cv = $path.$orgname;
        }
        else{
            $employee->cv = $employee->cv;
        }

        $employee->save();
        return redirect()->route('employee.show');
     }
}
