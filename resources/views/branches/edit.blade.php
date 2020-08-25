@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Branches</h2>
        {!! Form::open(['action' => ['BranchesController@update', $branch->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('name', 'Name')}}
                {{Form::text('name', $branch->name, [ 'class' => 'form-control'])}}
            </div>
            <div class="form-group"> 
                {{Form::label('company', 'Company')}}
                <select class="form-control" name="company">
                    <option value="nhfc" <?php echo $branch->company =='nhfc' ? 'selected' : ''; ?>>NHFC</option>
                    <option value="gtlic" <?php echo $branch->company =='gtlic' ? 'selected' : ''; ?>>GTLIC</option>
                </select>
            </div>
            <div class="form-group">
                {{Form::label('oic', 'Officer In Charge')}}
                {{Form::text('oic', $branch->officer_in_charge, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('region', 'Region')}}
                <select name="region" class="form-control">
                    <option value=" ">Select</option>
                    @foreach ($regions as $region)
                        <option value="{{$region->id}}"{{ $region->id == $branch->region_id ? 'selected' : ' '}}>{{$region->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                {{Form::label('address', 'Address')}}
                {{Form::textarea('address', $branch->address, ['class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group">
                {{Form::label('telephone_no', 'Telephone no')}}
                {{Form::text('telephone_no', $branch->telephone_no, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('fax_no', 'Fax no')}}
                {{Form::text('fax_no', $branch->fax_no, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('contact_no', 'Contact no')}}
                {{Form::text('contact_no', $branch->cellphone_no, ['class' => 'form-control'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection