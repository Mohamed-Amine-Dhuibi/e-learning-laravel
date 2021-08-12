@extends('admin.layouts.admin')

@section('content')




<div style="margin-top: 8%;margin-left:4%;">
  


   
    {{ Form::open(['action' => 'App\Http\Controllers\CourseController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    @csrf
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => '&nbsp;Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('course_brief', 'Description')}}
        {{Form::textarea('course_brief', '', ['id' => '', 'class' => 'form-control', 'placeholder' => '&nbsp;description'])}}
    </div>
    <div class="form-group">
        {{Form::label('is_active', 'Active:')  }}
        {{Form::checkbox('status', '1' , false) }}<br/>
    </div>
    <div>
        {{Form::label('c_count', "Chapter's count")}}
        {{Form::text('c_count', '', ['class' => 'form-control','placeholder'=>'&nbsp;number of chapters'])}}
    <div>
        {{Form::label('course_fee', "Price")}}
        {{Form::text('course_fee', '', ['class' => 'form-control','placeholder'=>'&nbsp;price'])}}
    </div>
        {{ Form::hidden('c_id', $c_id) }}
        {{Form::label('cover_image', 'Course Cover')}}<br/>
        {{ Form::file('cover_image') }}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close() }}

    
<hr>
</div>








@endsection
