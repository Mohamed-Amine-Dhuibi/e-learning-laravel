@extends('admin.layouts.admin')
@section('content')


@if ($events)

<link rel ="stylesheet" type ="text/css" href="{{ asset('css/coursesUser.css') }}">
    <div style="margin-left: 4%;">
    <h2 style="color: #ffff;">Events</h2>
    <a href="/myspace/events/create">create</a>
        <section class="home-cards" style="margin-top: 4%;">
            @foreach ( $events  as $event )

            <div class="card">
                <a href="/myspace/events/{{$event->id  }}"><img src="/storage/cover_images/{{ $event->cover_image }}" alt="" width="100px" height= "100px" ></a>
                <a href="/myspace/events/{{$event->id  }}" style="color: #ffff;">&nbsp;&nbsp;{{ $event->name }}</a>
            </div>
          @endforeach
          
    </section>
    </div>

@else
<div style="margin-left: 4%;">
<h1>Empty</h1>
&nbsp;<a href="/myspace/events/create">  create</a>
<div>
@endif

@endsection