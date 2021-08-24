@extends('layouts.app')
@section('content')

confirmation<br/>
title : {{ $course->title}}<br/>
fee : {{ $course->course_fee }}<br/>
{{ Form::open(['action' => 'App\Http\Controllers\EnrolementController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    {{ Form::hidden('c_id', $course->id) }}
    {{ Form::submit('Submit', ['class'=>'btn btn-primary']) }}
{{ Form::close() }}
@endsection