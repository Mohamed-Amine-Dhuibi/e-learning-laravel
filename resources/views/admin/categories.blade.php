
@extends('admin.layouts.admin')

@section('content')
@foreach ($errors->all() as $error )
    
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>

    @endforeach

    <h1>Create Category</h1>
    {{ Form::open(['action' => 'App\Http\Controllers\CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'description'])}}
    </div>
    <div class="form-group">
        {{Form::label('is_active', 'Active:')  }}
        {{Form::checkbox('status', '1', false) }}
    </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{Form::close() }}

    
<hr>
@foreach ($categories as $category )
    <div>
        {{ $category->name }}
        <small>{{ $category->description }}</small>
        <a href="/myspace/courses/{{ $category->id }}/edit">EDIT</a>
        <a href="/myspace/courses/{{ $category->id }}">Show</a> 
        {!! Form::open(['action'=>['App\Http\Controllers\CategoryController@destroy',$category->id],'method'=>'POST','class'=>""]) !!}
            {{ Form::hidden('_method','DELETE') }}
            {{ Form::submit('Delete',['class'=>'']) }}
        {!! Form::close() !!}
    </div>    
    @endforeach
@endsection
