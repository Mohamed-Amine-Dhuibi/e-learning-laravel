@extends('admin.layouts.admin')

@section('content')

<h1>
    {{ $course->title }}
</h1>
    {{ $course->course_brief }}
    <p>{{ $course->nb_chapters }}</p>
    <p>{{ $course->course_fee }}</p>









@endsection