@extends('admin.layouts.admin')

@section('content')
<div >
  <h1 style=" text-align:center; color:#F2F4F4; font-size:30px" >
    {{$event->name  }}
<th class="td-actions text-">
  <a href="/myspace/events/{{ $event->id }}/edit"><button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit course">
    <i class="material-icons">edit</i>
  </button></a>
  {!! Form::open(['action'=>['App\Http\Controllers\EventController@destroy',$event->id],'method'=>'POST','class'=>""]) !!}
            {{ Form::hidden('_method','DELETE') }}
            <button type="submit" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="delete course">
              <i class="material-icons">delete</i>
            </button>
        {!! Form::close() !!}
  
  </button>
</th>
  </h1>
<div>

    <div style="margin-left:10%; margin-top:7%; ">
    <th><strong><h3 style="font-size:20px; color:#C39BD3;">Description :</h3> {{ $event->description }}</th>
    <strong><h3 style="font-size:20px; color:#C39BD3; "> Price : </h3>{{ $event->fees }}<br/>
    <strong><h3 style="font-size:20px; color:#C39BD3;"> Date :</h3>  {{ $event->date }}
   
</div>

</div>
</div>
@endsection



