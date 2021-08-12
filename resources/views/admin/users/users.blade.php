@extends('admin.layouts.admin') 
@section('content') 
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                   <div class="row d-flex justify-content-center" >
                  <a href="/myspace/users/"  ><h4 class="card-title ">All&nbsp| &nbsp</h4></a>
                  <a href="/myspace/users/student"  ><h4 class="card-title ">Students &nbsp| &nbsp </h4></a>
                   <a href="/myspace/users/tutor"  ><h4 class="card-title ">Tutors &nbsp| &nbsp</h4></a>
                   <a href="/myspace/users/admin"  ><h4 class="card-title ">Admins</h4></a>
                   </div>
                         

                </div>
                <div class="card-body">
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
                           Action
                          </th>
                          
                      </thead>

                      <tbody>


                        @foreach ( $users as $user )
       
     
    
                        <tr>
                          <td>
                            {{ $user->id }}
                          </td>
                          <td>
                            <a href="/myspace/users/profile/{{ $user->id }}">{{ $user->name }}</a>
                          </td>
                          <td>
                            {{ $user->email }}  
                          </td>
                          <td>
                            {{ $user->phone_number }}
                          </td>
                          <td>
                            <a href="/myspace/users/{{ $user->id }}/edit">Edit</a> 
                             <a href="/myspace/users/{{ $user->id }}/delete">delete</a>
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





@endsection
