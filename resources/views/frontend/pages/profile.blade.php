@extends('frontend.layouts.layout')

@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">


      <div class="row">
        <div class="col-md-12">
          <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('profile.show',Auth::user()->employee_id)}}"><i class="bx bx-user me-1"></i> Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" "><i class="bx bx-bell me-1"></i> Notifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" ">Leave History</a>
            </li>
          </ul>
          <div class="card mb-4">
          <div class="d-flex justify-content-between">
            <h5 class="card-header">Profile Details</h5>
          </div>
            
            <!-- Account -->
            <div class="card-body">
              <div class="d-flex align-items-start align-items-sm-center gap-4">
                <img
                  src="{{asset($employee->profile_pic)}}" 
                  alt="user-avatar"
                  class="d-block rounded"
                  height=150px
                  width=150px
                  id="uploadedAvatar"
                />
              </div>
            </div>
            <hr class="my-0" />
            <div class="card-body">
              <p>Name: {{$employee->name}}</p>
              <p>Designation: {{$employee->designation}}</p>
              <p>Email: {{$employee->email}}</p>
              <p>Phone: {{$employee->phone}}</p>
              <p>Date of Birth: {{$employee->date_of_birth}}</p>
              <p>Company Name: {{$employee->company_id}}</p>
              <p>Department Name: {{$employee->department_id}}</p>
              <p>Reporting Boss: {{$employee->repoting_boss}}</p>
              <p>Total Leave: {{$employee->leave}}</p>
            </div>
            <hr class="my-0" />

          <div class="">   
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item m-3">
                  <a class="nav-link active" href="{{route('user.logout')}}">Logout</a>
                </li>
                <li class="nav-item m-3">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Update Password
                  </button>
                </li>
                <li class="nav-item m-3">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#leaveapply">
                   Apply Leave
                  </button>
                </li>
            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>

   <!-- Button trigger modal -->

<!-- edit password model-->
 @include('frontend.pages.editpassword')

 @include('frontend.pages.leavefrom')
@endsection