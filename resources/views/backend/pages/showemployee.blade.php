@extends('backend.layouts.layout')
@section('content')
<div class="m-3 p-3 inputbox">
    <div class="titlebox m-3">
        <p class="p-2">Show Company Data</p>
    </div>
    
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Status</th>
            <th scope="col">Company</th>
            <th scope="col">department</th>
            <th scope="col">Profile Pic</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <th>{{$data->name}}</th>

                    @if($data->status==1)
                      <td>Active</td>
                    @else
                       <td>Inactive</td>
                    @endif

                    <th>{{$data->company_id}}</th>
                    <th>{{$data->department_id}}</th>
                    <td><a href="{{asset($data->profile_pic)}}"  type="button" class="btn btn-outline-secondary">Show image</a></th>
                    <td><a href="{{route('employee.edit',$data->id)}}" type="button" class="btn btn-outline-secondary">Edit data</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection