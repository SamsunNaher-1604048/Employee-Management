@extends('frontend.layouts.layout')

@section('content')


<div class="container-xxl flex-grow-1 container-p-y">

  <ul class="nav nav-pills flex-column flex-md-row mb-3">
    <li class="nav-item">
      <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href=" ">Notifications</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{route('user.logout')}}">Logout</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Update Password
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link"  data-bs-toggle="modal" data-bs-target="#leaveapply">Leave Apply</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href=" ">Leave History</a>
    </li>

  </ul>

  <div class="mt-5">
    <p class="profile-title text-primary">Profile</p>
    <p class="profile-subtitle">Employee Section</p>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class='row d-flex justify-content-center mt-5 profile-box'>
        <div class="col-4">
          <p class="profile-data-title text-primary">Details info</p>
          <hr class="my-0  text-primary" />
          <div class="mt-5">
            <p class="profile-data">Name: {{$employee->name}}</p>
            <p class="profile-data">Employee_id: {{$employee->employee_id}}</p>
            <p class="profile-data">Designation: {{$employee->designation}}</p>
            <p class="profile-data">Company Name: {{$employee->company_id}}</p>
            <p class="profile-data">Department Name: {{$employee->department_id}}</p>
            <p class="profile-data">Reporting Boss: {{$employee->repoting_boss}}</p>
            <p class="profile-data">Date of Birth: {{$employee->date_of_birth}}</p>
            <p class="profile-data">Total Leave: {{$employee->leave}}</p>
          </div>
        </div>
        <div class="col-4 d-flex align-items-center justify-content-center ">
          <div class="">
            <img
              src="{{asset($employee->profile_pic)}}" 
              alt="user-avatar"
              height=250px
              width=250px
              id="uploadedAvatar"
            />
          </div>
        </div>
  
        <div class="col-4">
          <p class="profile-data-title  text-primary ">Contact Information</p>
          <hr class="my-0  text-primary" />
          <div class="mt-5">
             <p class="profile-data profile-data-title">Email</p>
             <p class="profile-data">{{$employee->email}}</p>
             <p class="profile-data profile-data-title">Phone</p>
             <p class="profile-data"> {{$employee->phone}}</p>
  
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

<!-- edit password model-->
 @include('frontend.pages.editpassword')

 {{-- application from --}}

 @include('frontend.pages.leavefrom')

@endsection