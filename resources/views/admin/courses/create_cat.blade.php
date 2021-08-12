@extends('admin.layouts.admin')


@section('content')
<div style="margin-left: 5%;">
<h1>Create Category</h1>
    {{ Form::open(['action' => 'App\Http\Controllers\CategoryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    @csrf

    <div class="form-group" style="margin-top: 3%;">
        {{Form::label('name', 'Name')}}
        <br/>
        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'name'])}}
    </div>
    <div class="form-group" style="margin-top: 4%;">
        {{Form::label('description', 'Description')}}
        <br/>
        {{Form::textarea('description', '', ['id' => '', 'class' => 'form-control', 'placeholder' => 'description'])}}
    </div>
    <div class="form-group">
        {{Form::label('is_active', 'Active:')  }}
       
        {{Form::checkbox('status', '1', false) }}
    </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        <br/>
    {{Form::close() }}
</div>
@endsection