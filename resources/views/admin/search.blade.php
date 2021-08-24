@extends('admin.layouts.admin') 
@section('content')

<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
               <div class="row d-flex justify-content-center" >
              <h1>Search results</h1>
               </div>
            </div>
            @if(count($users)>0)
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>Name</th>
                      <th>E-mail</th>
                      <th>Phone</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                      @foreach ( $users as $user )
                      <tr>
                        <td><a href="/myspace/users/profile/{{ $user->id }}">{{ $user->name }}</a></td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone_number }}</td>
                        <td><a href="/myspace/users/{{ $user->id }}/edit">Edit</a>&nbsp;|&nbsp;<a href="/myspace/users/{{ $user->id }}/delete">delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            @endif
            @if (count($courses)>0)
                Courses 
                @foreach ($courses as $course )
                  <tbody>
                    <tr>
                      <td>{{ $course->title }}</td>
                    </tr>
                  </tbody>
                @endforeach
            @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection