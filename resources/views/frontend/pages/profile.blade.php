@extends('frontend.layouts.layout')

@section('content')

<div class="content-wrapper">
  <div class="container-xxl flex-grow-1 container-p-y">


    <div class="row">
      <div class="col-3 mr-5">
        <div class="">
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
          <hr class="my-1" />
          <div>
            <p class="title"> {{$employee->name}}</p>
            <p class="subtitle">{{$employee->company_id}}</p>
          </div>
        </div>
      </div>

      <div class="col-8 ">
        <div class="bg-primary"> hello</div>
      </div>
    </div>
  </div>
</div>
<!-- edit password model-->
 @include('frontend.pages.editpassword')

@endsection