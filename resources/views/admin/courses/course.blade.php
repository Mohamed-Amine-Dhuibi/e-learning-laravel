@extends('admin.layouts.admin')

@section('content')
<div >
  <h1 style=" text-align:center; color:#F2F4F4; font-size:30px" >
    {{ $course->title }}

<th class="td-actions text-">
  <a href="/myspace/courses/course/{{ $course->id }}/edit"><button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit course">
    <i class="material-icons">edit</i>
  </button></a>
  <a href="/myspace/courses/course/delete/{{ $course->id }}"><button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="delete course">
    <i class="material-icons">delete</i>
  </button></a>
</th>
  </h1>
<div>

<div style="margin-left:10%; margin-top:7%; ">
 <th><strong><h3 style="font-size:20px; color:#C39BD3;">Course Brief :</h3> {!! $course->course_brief !!}</th>
 <strong><h3 style="font-size:20px; color:#C39BD3; "> Number of chapters : </h3>{{ $course->nb_chapters }}<br/>
  <strong><h3 style="font-size:20px; color:#C39BD3;"> Fee :</h3>  {{ $course->course_fee }}
   
</div>

</div>
</div>
@endsection



