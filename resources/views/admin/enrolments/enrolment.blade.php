@extends('admin.layouts.admin')

@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
               <div class="row d-flex justify-content-center" >
                 <a href="/myspace/users/students"  ><h4 class="card-title ">Subscriptions</h4></a>
               </div>
                     

            </div>
            <div class="card-body">

@if (count($enrolments)==0)

<div class="d-flex justify-content-center">
Empty !
</div>
@else
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-primary">
          <th>
            ID
          </th>
          <th>
            Name
          </th>
          <th>
           E-mail
          </th>
          <th>
            Phone
          </th>
          <th>
             Status
            </th>
            
        </thead>

        <tbody>


          @foreach ( $enrolments as $enrolment )



          <tr>
            <td>
              {{ $enrolment->User->id }} 
            </td>
            <td>
              {{ $enrolment->User->name }} 
            </td>
            <td>
              {{ $enrolment->User->email }} 
            </td>
            <td>
              {{ $enrolment->User->phone_number }} 
            </td>
            <td>
              @if ($enrolment->subscription_is_paid!=0)
              paid
              <a href="/myspace/courses/enrolments/{{ $enrolment->id }}/cancel">Cancel</a> @csrf
              @else
              unpaid
              <a href="/myspace/courses/enrolments/{{ $enrolment->id }}/approve">Approve</a>@csrf
          @endif
              <a href="/myspace/courses/enrolments/{{ $enrolment->id }}/delete">Delete</a>@csrf
            </td>
           
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
@endif

                





@endsection


