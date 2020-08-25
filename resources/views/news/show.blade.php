@extends('layouts.app')

@section('content')
    <section class="page-title">
        <div class="container">
            <div class="col-md-6">
                <h3>News</h3>
            </div>
            <div class="col-md-6">
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a class="active" href="{{ url('/news') }}">News</a></li>
                </ol>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="image-1">
           <img src="/newhorizon/public/{{$new->image}}">
        </div>
        <div class="title-1">
            <p>{{$new->title}}</p>
        </div>
        <div class="content">
           <p>{!!$new->content!!}</p> 
        </div>  
    </div>
               
@endsection    