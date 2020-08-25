@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit News</h2>
        {!! Form::open(['action' => ['NewsController@update', $new->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title',$new->title, [ 'class' => 'form-control'])}}
                
            </div>
            <div class="form-group">
                {{Form::label('Image', 'image') }}
                {{Form::file('image', NULL) }}
                <img width="30%" src="/newhorizon/public/{{$new->image}}" alt="">
            </div>
            <div class="form-group">
                {{Form::label('content', 'Content')}}
                {{Form::textarea('content', $new->content, ['id' => 'ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group">
                {{Form::label('is_gallery', 'Is_gallery')}}
                <select class="form-control" name="is_gallery">
                <option value="yes"{{ $new->is_gallery == 'yes' ? 'selected' : ' '}}>YES</option>
                <option value="no"{{ $new->is_gallery == 'no' ? 'selected' : ' '}}>NO</option>
                </select>
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection