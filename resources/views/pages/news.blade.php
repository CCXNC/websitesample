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
    @foreach($news as $new)
    <div class="container">
        <div class="grid-container">
            <div class="grid-item">
                <img src="/newhorizon/public/{{$new->image}}" alt="">
            </div>
            <div class="grid-item-1">
            <a class="active" href="/newhorizon/public/dashboard/news/{{$new->id}}">{{ $new->title }}</a>
                <p class="date"><span class="fa fa-calendar-o"></span> December 12, 2018</p>
                <p>{!! str_limit($new->content, 150)!!}</p>
            </div>
        </div>
    </div>
    @endforeach   
               
@endsection    