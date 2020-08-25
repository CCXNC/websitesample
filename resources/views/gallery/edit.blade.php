@extends('layouts.app')

    @section('content')
        <div class="container">
            <h2>Edit Gallery</h2>
            {!!Form::open(['action' => ['GalleryController@update', $gallery->id], 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                <div class="form-group">    
                    {{Form::label('title','Title')}}
                    {{Form::text('title', $gallery->title,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::label('Image', 'image') }}
                    {{Form::file('image', null) }}
                <img width=200px src="/newhorizon/public{{$gallery->image}}" alt="">
                    
                </div>
                <div class="form-group">
                    {{Form::label('order_no', 'Order_no')}}
                    {{Form::number('order_no', $gallery->order_no ,['class' => 'form-control'])}}
                </div>
                <div class="form-group">
                    {{Form::hidden('_method','PUT')}}
                    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
                </div>
            {!! Form::close() !!}
        </div>
    @endsection()