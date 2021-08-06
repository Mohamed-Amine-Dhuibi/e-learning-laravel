@extends('admin.layouts.admin')


@section('content')
<h1>Create Category</h1>
    {{ Form::open(['action' => 'App\Http\Controllers\CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    @csrf

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
@endsection