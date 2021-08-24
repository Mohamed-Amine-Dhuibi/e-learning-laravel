@extends('admin.layouts.admin')


@section('content')
<div style="margin-left: 5%;">
    <h1>Create Event</h1>
        {{ Form::open(['action' => 'App\Http\Controllers\EventController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
        @csrf

        <div class="form-group" style="margin-top: 3%;">
            {{Form::label('name', 'Name')}}
            <br/>
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
        </div>
        <div class="form-group" style="margin-top: 4%;">
            {{Form::label('description', 'Description')}}
            <br/>
            {{Form::textarea('description', '', ['id' => 'editor', 'class' => 'form-control', 'placeholder' => 'description'])}}
        </div>
        <div class="form-group" style="margin-top: 4%;">
            {{Form::label('price', 'Price')}}
            <br/>
            {{Form::text('fees', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'price'])}}
        </div>
        <div class="form-group">
            {{Form::label('is_active', 'Active:')  }}
            {{Form::checkbox('status', '1', false) }}
            <br/>
        </div>
        <div class="form-group" style="margin-top: 3%;">
            {{Form::label('date', 'Date')}}
            <br/>
            {{Form::date('date', 'y-n-j')}}  
        </div>
            {{Form::label('cover_image', 'Event Image')}}<br/>
            {{ Form::file('cover_image') }}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

        {{Form::close() }}
</div>
<script>
    tinymce.init({
      selector: '#editor'
    });
  </script>
@endsection