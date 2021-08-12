@extends('admin.layouts.admin')
@section('content')
@foreach ($errors->all() as $error )
    
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>

    @endforeach
    <div style="margin-top: 8%;margin-left:4%;">
    <h1 style="margin-left: 2%; color:#D7BDE2;">Edit Course</h1>


    {{ Form::open(['action' => ['App\Http\Controllers\CourseController@update',$course->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    @csrf
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $course->title, ['class' => 'form-control', 'placeholder' => '&nbsp;Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('course_brief', 'Description')}}
        {{Form::textarea('course_brief', $course->course_brief, ['id' => '', 'class' => 'form-control', 'placeholder' => '&nbsp;description'])}}
    </div>
    <div class="form-group">
        {{Form::label('is_active', 'Active:')  }}
        {{Form::checkbox('status', '1' , '0') }}<br/>
    </div>
    <div>
        {{Form::label('c_count', "Chapter's count")}}
        {{Form::text('c_count', $course->nb_chapters, ['class' => 'form-control','placeholder'=>'&nbsp;number of chapters'])}}
    <div>
        {{Form::label('course_fee', "Price")}}
        {{Form::text('course_fee', $course->course_fee, ['class' => 'form-control','placeholder'=>'&nbsp;price'])}}
    </div>
        
        {{Form::label('cover_image', 'Event Image')}}<br/>
        {{ Form::file('cover_image') }}
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close() }}
<hr>
    </div>
@endsection