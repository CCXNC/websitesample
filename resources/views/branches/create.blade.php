@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Branches</h2>
        {!! Form::open(['action' => 'BranchesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', '', [ 'class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('company', 'Company')}}
                {{Form::select('company', array(' ' => 'Select','nhfc' => 'NHFC', 'gtlic' => 'GLTIC'), ' ' , ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('oic', 'Officer In Charge')}}
                {{Form::text('oic', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('region', 'Region')}}
                <select name="region" class="form-control">
                    <option value=" ">Select</option>
                    @foreach ($regions as $region)
                        <option value="{{$region->id}}">{{$region->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {{Form::label('address', 'Address')}}
                {{Form::textarea('address', '', ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group">
                {{Form::label('telephone_no', 'Telephone no')}}
                {{Form::text('telephone_no', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('fax_no', 'Fax no')}}
                {{Form::text('fax_no', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('contact_no', 'Contact no')}}
                {{Form::text('contact_no', '', ['class' => 'form-control'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection