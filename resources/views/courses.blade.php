@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://use.fontawesome.com/8c01f7817d.js"></script>
<link rel ="stylesheet" type ="text/css" href="./css/coursesUser.css">
<div class="square square-lg" style="background: #313346 ;height: 70px; width: 100%" ></div>

        <div style="position: relative;">
            @if (count($events)!=0)
            <h1>Events</h1>
                <section class="row home-cards">
                    @foreach ($events  as $event )
                        <div>
                        <img src="/storage/cover_images/{{ $event->cover_image }}" alt="" width="150" height="150">
                        <p> {{ $event->description }}</p>
                        <a href="/event/enrol/create/{{ $event->id }}">{{ $event->name }}</a>
                        </div>
                    @endforeach
                </section>
            @endif                 
            <h2>Courses</h2>
                    @foreach ($categories  as $category )
                    @if (count($category->courses)!=0)
                        <h3>{{ $category->name }}</h3>
                    
                        <section class="row home-cards">
                        @foreach ( $category->courses  as $course )
                                @if ($course->status==1)
                            <div>
                            <img src="/storage/cover_images/{{ $course->cover_image }}" alt="">
                            <h4><a href="/course/{{ $course->id }}" class="btn btn-primary">{{ $course->title }}</a> </h4>
                            <p> {{ $course->description }}</p>
                            <a href="/course/{{ $course->id }}">Learn More <i class="fas fa-chevron-right"></i></a>
                            </div>
                            @endif
                        @endforeach
                        </section>

                        @endif
                    @endforeach 
                    <link rel="stylesheet" href={{ asset('css/style.css') }}>
        </div>
        
@endsection
