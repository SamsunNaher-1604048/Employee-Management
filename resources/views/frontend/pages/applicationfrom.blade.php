@extends('frontend.layouts.layout')
@section('content')
<div class="container mt-3">

    <div>
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('profile.show',Auth::user()->employee_id)}}"><i class="bx bx-user me-1"></i> Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href=" "><i class="bx bx-bell me-1"></i>Print</a>
            </li>
          </ul>
    </div>

    <div class="m-5 p-5 application">
        <p class="title">JADROO GROUP<p>
            <p class="text-center">KA-18/1(8th-10th floor) Rasulbag Shaheed Tajuddin Ahmed Sarani, Mohakhali,Dhaka 1212</p>
        
            <div class="mb-5">
                <p class="subtitle">Leave Application Form</p>
            </div>
        
            <div>
                <p class="d-inline">I Myself, </p>
                <p class="d-inline text ">{{Auth::user()->name}}</p>
        
                <p class="d-inline">Employee ID:</p>
                <p class="d-inline text">{{Auth::user()->employee_id}}</p>
        
                <p class="d-inline">Designition</p>
                <p class="d-inline text">{{$employee->designation}}</p>
            </div>
        
            <div class="mt-3">
                <p class="d-inline">Department:</p>
                <p class="d-inline text">{{$employee->department_id}}</p>
        
                <p class="d-inline">Reporting To</p>
                <p class="d-inline text">{{$employee->repoting_boss}}</p>
            </div>
        
            <div class="mt-3">
                <p class="d-inline">Wish to apply Leave for: </p>
                <p class="d-inline text">{{$data->leave_day}}</p>
                <p class="d-inline">days</p>
            </div>
        
            <div class="mt-3">
                <p class="d-inline">From: </p>
                <p class="d-inline text">{{$data->from_date}}</p>
                <p class="d-inline">To:</p>
                <p class="d-inline text">{{$data->to_date}}</p>
                <p class="d-inline">DOJ:</p>
                <p class="d-inline text">{{$data->date_to_join}}</p>
            </div>
        
            <div class="mt-5">
                <p>For the folloing Reasone(s)</p>
                <p class="d-inline text">{{$data->resone}}</p>
            </div>

            <div>
                <input  id="leave_type" value="{{$data->leave_type}}" hidden/>
                <p class="mt-5 subtitle">Leave Request</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Asking</th>
                        <th scope="col">Taken</th>
                        <th scope="col">Remaining</th>
                        <th scope="col">Remarks</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row"><input class="Personal-box" type="checkbox"></td>
                        <td class="Personal">Parsonal</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row"><input  class="Sick-box" type="checkbox"></th>
                        <td class="Sick">Sick</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row" ><input class="Planned-box" type="checkbox"></th>
                        <td class="Planned">Planned</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row"><input class="In-Lieu-of-box" type="checkbox"></th>
                        <td class="In-Lieu-of">In Lieu of</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row"><input class="Vacation-box" type="checkbox"></th>
                        <td class="Vacation">Vacation</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row"><input class="Maternity-box" type="checkbox"></th>
                        <td class="Maternity">Maternity</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row"><input class="Other-box" type="checkbox"></th>
                        <td class="Other">other:</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    </tbody>
                </table>
            </div>


            <div class="mt-5">
                <p class="subtitle">Signature Section</p>
                <table class="table">
                    <tbody>
                      <tr>
                        <th scope="row">Employee's Sign</th>
                        <td></td>
                        <td>Date:</td>
                        <th></th>
                      </tr>
                      <tr>
                        <th scope="row">Line Incharge's Sign</th>
                        <td></td>
                        <td class="">Date:</td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row">Departmental Head's Sign</th>
                        <td></td>
                        <td>Date:</td>
                        <td></td>
                      </tr>
                    </tbody>
                </table>
            </div>


            <div class="mb-5">
                <p class="mt-5 subtitle">Office use only</p>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col">Asking</th>
                        <th scope="col">Taken</th>
                        <th scope="col">Remaining</th>
                        <th scope="col">Remarks</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td>Casual</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td>Sick</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td>In Lieu of</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td>Maternity</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    <tr>
                        <th scope="row"><input type="checkbox"></th>
                        <td>other:</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                    </tbody>
                </table>
            </div>

            <div class="mt-5 mb-5">
                <p>HR Department</p>
                <p>Jadroo Group</p>
            </div>
    </div>
</div>

<script>
    const val = document. querySelector('#leave_type').value;

    if(val == document.querySelector('.Personal').className){
        document.querySelector('.Personal-box').checked=true;
    }

    else if(val == document.querySelector('.Sick').className){
        document.querySelector('.Sick-box').checked=true;
    }
    else if(val== document.querySelector('.Planned').className){
        document.querySelector('.Planned-box').checked=true;
    }
    else if(val== document.querySelector('.In-Lieu-of').className){
        document.querySelector('.In-Lieu-of-box').checked=true;
    }
    else if(val== document.querySelector('.Vacation').className){
        document.querySelector('.Vacation-box').checked=true;
    }
    else if(val== document.querySelector('.Maternity').className){
        document.querySelector('.Maternity-box').checked=true;
    }
    else{
        document.querySelector('.Other-box').checked=true;
    }
   
    

</script>
@endsection