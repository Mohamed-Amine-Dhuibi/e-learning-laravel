@extends('admin.layouts.admin')

@section('content')

<h1>
   Title :  {{ $course->title }}
</h1>
@foreach ($enrolments as $enrolment )



{{ $enrolment->User->name }} | @if ($enrolment->subscription_is_paid!=0)
    paid
    <a href="/myspace/courses/enrolments/{{ $enrolment->id }}/cancel">cancel</a>
    @else
    unpaid
    <a href="/myspace/courses/enrolments/{{ $enrolment->id }}/approve">approve</a>
    @endif
<br/>


@endforeach
@endsection