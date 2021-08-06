@extends('admin.layouts.admin')
@section('content')
<h1>Edit Category</h1>

    {{ Form::open(['action' => ['App\Http\Controllers\CategoryController@update',$category->id] , 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
    @csrf

    <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', $category->name, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', $category->description, ['id' => '', 'class' => 'form-control', 'placeholder' => 'description'])}}
    </div>
    <div class="form-group">
        {{Form::label('is_active', 'Active:')  }}
        {{Form::checkbox('status','1',$category->status) }}
    </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {{ Form::close() }}

@endsection