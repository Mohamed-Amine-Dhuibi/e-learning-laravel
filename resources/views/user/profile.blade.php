@extends('layouts.app')
@section('content')
<div class="square square-lg" style="background: #313346 ;height: 70px; width: 100%" ></div>
<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
    <form action="/myspace/profile/update" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="col-md-3 border-right">
        
          <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="/storage/profiles_pics/{{ $user->profile_pic }}" height="150" width="150"><input type="file" name="profile_pic"><span class="font-weight-bold">{{ $user->name }}</span><span class="text-black-50">{{ $user->email }}</span><span> </span></div>
        </div>
      <div class="col-md-5 border-right">
          <div class="p-3 py-5">
              <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4 class="text-right">Profile Settings</h4>
              </div>
              <div class="row mt-2">
                  <div class="col-md-6"><label class="labels">Name</label><input type="text" name="name" class="form-control" placeholder="first name" value="{{ $user->name }}"></div>
              </div>
              <div class="row mt-3">
                  <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text"  name="phone_number" class="form-control" placeholder="enter phone number" value="{{ $user->phone_number }}"></div>
                  <div class="col-md-12"><label class="labels">Email </label><input type="text" class="form-control" name="email" placeholder="enter email id" value="{{ $user->email }}"></div>
                  <div class="col-md-12"><label class="labels">Password </label><input type="password" class="form-control" name="password" placeholder="password" value=""></div>
                  <div class="col-md-12"><label class="labels">Confirm Password </label><input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" value=""></div>

              </div>
              
              <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Save Profile</button></div>
          </div>
        </div>
      </form>
  </div>
</div>
</div>
</div>
<style>
  body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
</style>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection