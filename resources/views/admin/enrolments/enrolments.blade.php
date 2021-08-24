
@extends('admin.layouts.admin')

@section('content')
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
                    <section class="home-cards">
                        @foreach ( $category->courses  as $course )
                        <div>
                        <a href="/myspace/courses/enrolments/{{ $course->id }}"><img src="/storage/cover_images/{{ $course->cover_image }}" alt="">                        
                        <a href="/myspace/courses/enrolments/{{ $course->id }}" class="btn btn-primary">{{ $course->title }}</a>
                        </div>
                        @endforeach
    
    </section>
    
    @endforeach
</div>
    <hr style="width:30%;text-align:center;margin-left:35% ;height:1px; color: black; background-color:gray" >
    @endif
    
    @endsection



