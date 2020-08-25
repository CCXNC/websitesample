@extends('layouts.app')

@section('content')
    <div class="parallax-bg parallax-bg-careers">
        <div class="container">
            <h2>Careers</h2>
            <p>Interested applicants can apply directly in our Head Office or in the following NHFC/GTLIC branches.</p>
        </div>
    </div>
    <div class="main">
        <div class="container">
            @foreach($careers as $career)
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-primary panel-career">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $career->title }}</h3>
                        </div>
                        <div class="panel-body">
                            <h4>{{ $career->name }} Branch</h4>
                            <p>{{ $career->address }}</p>
                            <p>Look for: {{ $career->officer_in_charge }}</p>
                            <p>Requirements:</p>
                            <ul>
                                <li>{{ $career->education }}</li>
                                <li>{{ $career->gender }}</li>
                                <li>{{ $career->status }}</li>
                                <li>{{ $career->age_range }}</li>
                                <li>{!! $career->description !!}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection