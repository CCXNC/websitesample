@extends('layouts.app')

    @section('content')
        <div class="container">
            <h2>Create Gallery</h2>
            {!!Form::open(['action' => 'GalleryController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                <div class="form-group">    
                    {{Form::label('title','Title')}}
                    {{Form::text('title',' ',['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('Image', 'image') }}
                    {{Form::file('image', null) }}
                </div>
                <div class="form-group">
                    {{Form::label('order_no', 'Order_no')}}
                    {{Form::number('order_no', ' ',['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}

        </div>
    @endsection