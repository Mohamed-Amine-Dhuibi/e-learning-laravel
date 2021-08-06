@extends('admin.layouts.admin') 
@section('content') 


@foreach ( $users as $user )
    <a href="/myspace/users/{{ $user->id }}">{{ $user->name }}</a>   |
    {{ $user->email }}  |
    {{ $user->phone_number }} | <a href="/myspace/users/{{ $user->id }}/edit">Edit</a> | <a href="/myspace/users/{{ $user->id }}/delete">delete</a>
    <br/>

    @endforeach
@endsection
