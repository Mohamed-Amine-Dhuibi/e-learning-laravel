@extends('admin.layouts.admin')

@section('content')

<h1>
   Title :  {{ $course->title }}
</h1>
   Course Brief : {{ $course->course_brief }}<br/>
   Number of chapters : {{ $course->nb_chapters }}<br/>
   Fee :  {{ $course->course_fee }}
   <a href="/myspace/courses/course/{{ $course->id }}/edit">EDIT</a>
@endsection