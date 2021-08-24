@extends('admin.layouts.admin')

@section('content')




<div style="margin-top: 8%;margin-left:4%;">
  


   
    {{ Form::open(['action' => 'App\Http\Controllers\CourseController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    @csrf
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => '&nbsp;Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('course_brief', 'Description')}}
        <br/>
        {{Form::textarea('course_brief', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => '&nbsp;description'])}}
    </div>
    <div class="form-group">
        {{Form::label('is_active', 'Active:')  }}
        {{Form::checkbox('status', '1' , false) }}<br/>
    </div>
    <div>
        {{Form::label('c_count', "Chapter's count")}}
        {{Form::text('c_count', '', ['class' => 'form-control','placeholder'=>'&nbsp;number of chapters'])}}
    <div>
        {{Form::label('course_fee', "Price")}}
        {{Form::text('course_fee', '', ['class' => 'form-control','placeholder'=>'&nbsp;price'])}}
    </div>
    <div>
        {{Form::label('tutor', "Tutor : ")}}
        <select name='tutor' class="selectpicker"  aria-label="size 3 select example">         
                @foreach ($tutors as $tu )
                    <option value="{{ $tu->id }}">{{ $tu->name }}</option>
                @endforeach
          </select>
    </div>
        {{ Form::hidden('c_id', $c_id) }}
        {{Form::label('cover_image', 'Course Cover')}}<br/>
        {{ Form::file('cover_image') }}

        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close() }}

    
<hr>
</div>

<script>
    tinymce.init({
      selector: '#editor'
    });
  </script>






@endsection
