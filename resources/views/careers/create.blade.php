@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Careers</h2>
        {!! Form::open(['action' => 'CareersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('branches', 'Branch')}}
                {{Form::select('branches',
                array(  ' ' => 'Select',
                        '1' => 'Alabang',
                        '2' => 'Alaminos',
                        '3' => 'Baclaran',
                        '4' => 'Baguio',
                        '5' => 'Balagtas',
                        '6' => 'Bambang',
                        '7' => 'Bangued',
                        '8' => 'Batangas',
                        '9' => 'Bontoc',
                        '10' => 'Candon',
                        '11' => 'Dagupan',
                        '12' => 'Divisoria',
                        '13' => 'La-Union',
                        '14' => 'Legazpi',
                        '15' => 'Naga',
                        '16' => 'Novaliches',
                        '17' => 'Roxas',
                        '18' => 'San Juan',
                        '19' => 'San Pablo',
                        '20' => 'Santiago',
                        '21' => 'Solano',
                        '22' => 'Tabuk',
                        '23' => 'Vigan',
                        '24' => 'Zambales'
                    ), ' ' , ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', [ 'class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('education', 'Education')}}
                {{Form::text('education', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('gender', 'Gender')}}
                {{Form::select('gender', array(' ' => 'Select','Male' => 'Male', 'Female' => 'Female'), ' ' , ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('status', 'Status')}}
                {{Form::select('status', array(' ' => 'Select', 'Single' => 'Single', 'Married' => 'Married', 'Separated' => 'Separated', 'Widow' => 'Widow'), ' ' , ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('age', 'Age Range')}}
                {{Form::text('age', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', '', ['id' => 'ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection