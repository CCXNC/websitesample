@extends('layouts.app')

@section('content') 
    <div class="container">
        <h1>Create News</h1>
        {!! Form::open(['action' => 'NewsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', [ 'class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('Image', 'image') }}
                {{Form::file('image', null) }}
            </div>
            <div class="form-group">
                {{Form::label('content', 'Content')}}
                {{Form::textarea('content', '', ['id' => 'ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group">
                {{Form::label('is_gallery', 'Is_gallery')}}
                {{Form::select('is_gallery', array(' ' => 'Select','yes' => 'Yes', 'no' => 'No'), ' ' , ['class' => 'form-control'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection