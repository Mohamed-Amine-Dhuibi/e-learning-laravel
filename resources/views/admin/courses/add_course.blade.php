@extends('admin.layouts.admin')

@section('content')
<div class="pl-5">
    @foreach ($errors->all() as $error )
    
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>

    @endforeach

    <h1>Add Course</h1>
    {{ Form::open(['action' => 'App\Http\Controllers\CourseController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    @csrf
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('course_brief', 'Description')}}
        {{Form::textarea('course_brief', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'description'])}}
    </div>
    <div class="form-group">
        {{Form::label('is_active', 'Active:')  }}
        {{Form::checkbox('status', '1' , false) }}<br/>
        {{Form::label('c_count', "Chapter's count")}}
        {{Form::text('c_count', '', ['class' => 'form-control'])}}
        {{Form::label('course_fee', "Price")}}
        {{Form::text('course_fee', '', ['class' => 'form-control'])}}
    </div>
        {{ Form::hidden('c_id', $c_id) }}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close() }}

    
<hr>
</div>

@endsection
