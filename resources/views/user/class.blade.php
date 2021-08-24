@extends('layouts.app')
@section('content')
<div class="square square-lg" style="background: #313346 ;height: 70px; width: 100%" ></div>
@if( Auth::user()->privilege=='tutor')
{{ $tutor->name }}
{{ $course->Chapters }}
<form method="POST" action="/myspace/class" enctype="multipart/form-data">
@csrf
<input name="video" type="file">
<input name="name" type="text" placeholder="title">
<input name='course_id' type="hidden" value="{{ $course->id }}">
<button type='submit'>submit</button>
</form>
@endif
@endsection