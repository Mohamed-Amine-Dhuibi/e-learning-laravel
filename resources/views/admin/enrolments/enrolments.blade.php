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
    @foreach ($categories as $category )
            <div class="d-flex flex-row">
                <h1> {{ $category->name }}</h1> 
                <div class="top-0 end-0">
                </div>
                
            </div>
        
        
        <div class="d-flex flex-row">
        @foreach ( $category->courses  as $course )
        <div class="card" style="width: 10rem ">
            <img src="data:image/jpeg;base64,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" width="150" height="150" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $course->title }}</h5>
              <p class="card-text"> content.</p>
              <a href="/myspace/courses/enrolments/{{ $course->id }}" class="btn btn-primary">{{ $course->title }}</a>
            </div>
        </div>
            
        @endforeach
    </div>
        
        <hr/>
       
    @endforeach
    
    @endif
    
    @endsection

