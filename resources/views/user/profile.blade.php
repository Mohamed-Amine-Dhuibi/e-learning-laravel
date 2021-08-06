
@extends('admin.layouts.admin')
@section('content')

name : {{ $user->name }}<br/>
<a href="/myspace/users/{{ $user->id }}/edit">Edit</a> | <a href="/myspace/users/{{ $user->id }}/delete">delete</a>

Enrolements : 
@foreach ($user->Enrolments as $enrolment)
<div>{{ $enrolment->course->title}}</div> 
@endforeach

@endsection



