@extends('layouts.app')
@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/8c01f7817d.js"></script>
    <link rel ="stylesheet" type ="text/css" href="./css/coursesUser.css">
    <div class="square square-lg" style="background: #313346 ;height: 70px; width: 100%" ></div>
            <div style="position: relative;">
                @if(Auth::user()->privilege=='tutor')
                    <h2>Tutoring</h2>
                    <section class="row home-cards">
                        @foreach ( (App\Models\Tutor::find(Auth::user()->id))->Courses  as $course )
                            <div>
                            <img src="/storage/cover_images/{{ $course->cover_image }}"  width="200" height="200">
                            <h4><a href="/myspace/class/{{ $course->id }}" class="btn btn-primary">{{ $course->title }}</a> </h4>
                            <p> {{ $course->description }}</p>
                            <a href="/myspace/class/{{ $course->id }}">Go To Class </a>
                            </div>
                        @endforeach
                        </section> 
                
                 
                @endif
                @if (count($events)!=0)
                <h1>Events</h1>
                    <section class="row home-cards">
                        @foreach ($events  as $event )
                            <div>
                            <img src="/storage/cover_images/{{ $event->cover_image }}" alt="" width="200" height="200">
                            
                            <a href="/event/{{ $event->id }}">{{ $event->name }}</a>
                            </div>
                        @endforeach
                    </section>
                @endif                 
                <h2>Courses</h2>
                            <section class="row home-cards">
                            @foreach ( $courses  as $course )
                                <div>
                                <img src="/storage/cover_images/{{ $course->cover_image }}"  width="200" height="200">
                                <h4><a href="/myspace/class/{{ $course->id }}" class="btn btn-primary">{{ $course->title }}</a> </h4>
                                <p> {{ $course->description }}</p>
                                <a href="/myspace/class/{{ $course->id }}">Go To Class </a>
                                </div>
                            @endforeach
                            </section> 
                        <link rel="stylesheet" href={{ asset('css/style.css') }}>
            </div>
            
@endsection 