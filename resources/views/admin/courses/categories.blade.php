
@extends('admin.layouts.admin')

@section('content')
<div>


    @foreach ($errors->all() as $error )
    
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>

    @endforeach
    @if ($count==0)
    <div  class="d-flex justify-content-center "><h1>Add Category</h1></div>
    <div class="d-flex justify-content-center">
        <a href="/myspace/courses/create_cat">
        <img src={{ asset('images/add.svg') }} width="150" height="150"></a>     
    @else
    
    <link rel ="stylesheet" type ="text/css" href="{{ asset('css/coursesUser.css') }}">
    <div style="margin-left: 4%;">
    <h2 style="color: #ffff;">Courses</h2>
    @foreach ($categories as $category )
    
      <h3 style="color: #ffff;">{{ $category->name }}</h3>
      <a href="/myspace/courses/course/create/{{ $category->id }}">Add Course</a>
      <a href="/myspace/courses/cat/{{ $category->id }}/edit">EDIT</a>
    
       
        <section class="home-cards" style="margin-top: 4%;">
            @foreach ( $category->courses  as $course )

            <div>
                <a href="/myspace/courses/course/{{ $course->id }} "><img src="/storage/cover_images/{{ $course->cover_image }}" width="200px" height="200px" alt="">
                    <a href="/myspace/courses/course/{{ $course->id }}" style="color: #ffff;">{{ $course->title }}</a>
                
            
            </div>
          @endforeach
          
    </section>
    
    @endforeach
    <hr style="width:30%;text-align:center;margin-left:35% ;height:1px; color: black; background-color:gray" >
    <div  class="d-flex justify-content-center">Add Category</div>
    <div class="d-flex justify-content-center">
        <a href="/myspace/courses/create_cat">
        <img src={{ asset('images/add.svg') }} width="50" height="50" ></a> 
    </div>
    </div>
    @endif
</div>
    
    @endsection

