@extends('backend.layouts.layout')
@section('content')

<div class="m-3 p-3 inputbox">
    <div class="titlebox mt-4 mb-4 ml-3 mr-3">
        <p class="p-2">Edit Employee</p>
    </div>
    <form action="{{route('employee.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row ">

            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="employee_id">Enter Employee ID:</label><br>
                    <input type="text" name="employee_id" class="form-control" placeholder="395" required>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="name">Enter Employee Name:</label><br>
                    <input type="text" name="name" class="form-control"  required>
                </div>
            </div>
    
            {{-- email and phone --}}
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12">
                    <label for="email">Enter Employee Email:</label><br>
                    <input type="email" name="email" class="form-control""required>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="phone">Enter Employee Phone No:</label><br>
                    <input type="text" name="phone" class="form-control" required>
                </div>
            </div>
    
             {{-- Date of Birth and Gender --}}
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12">
                    <label for="date_of_birth">Enter Employee Date of Brith:</label><br>
                    <input type="date" name="date_of_birth" class="form-control" required>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="gender">Enter Employee Gender:</label><br>
                    <select class="form-select" aria-label="Default select example" name="gender">
                        <option selected value="1">Male</option>
                        <option value="2">Female</option>
                    </select>
                </div>
            </div>
    
    
            {{-- company and department --}}
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12">
                    <label for="company_id">Enter Employee Company:</label><br>
                    <select class="form-control" id="select2" name="company_id">
                        @foreach ($companys as $company)
                            <option>{{$company->name}}</option> 
                       @endforeach
                     </select>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="department_id">Enter Employee Department:</label><br>
                    <select class="form-control" name="department_id" id="select3">
                        @foreach ($departments as $department)
                            <option>{{$department->name}}</option> 
                       @endforeach
                     </select>
                </div>
            </div>
    
            {{-- Designation and status --}}
            <div class="row mt-3">
                <div class="col-md-6 col-sm-12">
                    <label for="designation">Enter Employee Designation:</label><br>
                    <select class="form-select" aria-label="Default select example" name="designation">
                        <option selected value="Head of the Department">Head of the Department</option>
                        <option value="Employee">Employee</option>
                        <option value="HR">HR</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="status">Enter Employee Status:</label><br>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected value="1">Active</option>
                        <option value="2">inactive</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                
                <div class="col-md-6 col-sm-12">
                    <label for="repoting_boss">Enter Employee Reporting boss:</label><br>
                    <select class="form-control" name="repoting_boss" id="select4">
                        @foreach ($rep_boss as $rep)
                            <option>{{$rep->name}}</option> 
                       @endforeach
                            <option>No Repoting Boss</option>
                     </select>
                </div>

                <div class="col-md-6 col-sm-12">
                    <label for="status">Enter Employee password:</label><br>
                    <input type="password" name="password" class="form-control"  required>
                </div>

            </div>

            {{-- button --}}
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <label for="profile_pic">Enter Employee Profile Pic:</label><br>
                        <input type="file" name="profile_pic"  class="imagesubmit" required><br> 

                    </div>
                    <div class="col-md-6 col-12">
                        <label for="cv">Enter Employee CV:</label><br>
                        <input type="file" name="cv"  class="imagesubmit" required><br> 
                        
                    </div>
                    
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn submitbutton">submit</button>
                </div>

            </div>
        </div>
    </form>
</div>

<script>
    $('#select2').select2();
    $('#select3').select2();
    $('#select4').select2()
</script>


@endsection

