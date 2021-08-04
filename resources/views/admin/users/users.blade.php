@extends('admin.layouts.admin') 
@section('content') 


@foreach ( $users as $user )
    <a href="#">{{ $user->name }}</a>   |
    {{ $user->email }}  |
    {{ $user->phone_number }}|<a href="#">Edit</a>|<a href="#">delete</a>
    <br/>

    @endforeach
@endsection
