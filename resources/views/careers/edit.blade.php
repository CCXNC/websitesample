@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Careers</h2>
        {!! Form::open(['action' => ['CareersController@update' ,$career->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('branches', 'Branch')}}
                <select class="form-control" name="branches">
                    <option value="1" <?php echo $career->branch_id =='1' ? 'selected' : ''; ?>>Alabang</option>
                    <option value="2" <?php echo $career->branch_id =='2' ? 'selected' : ''; ?>>Alaminos</option>
                    <option value="3" <?php echo $career->branch_id =='3' ? 'selected' : ''; ?>>Baclaran</option>
                    <option value="4" <?php echo $career->branch_id =='4' ? 'selected' : ''; ?>>Baguio</option>
                    <option value="5" <?php echo $career->branch_id =='5' ? 'selected' : ''; ?>>Balagtas</option>
                    <option value="6" <?php echo $career->branch_id =='6' ? 'selected' : ''; ?>>Bambang</option>
                    <option value="7" <?php echo $career->branch_id =='7' ? 'selected' : ''; ?>>Bangued</option>
                    <option value="8" <?php echo $career->branch_id =='8' ? 'selected' : ''; ?>>Batangas</option>
                    <option value="10" <?php echo $career->branch_id =='10' ? 'selected' : ''; ?>>Candon</option>
                    <option value="11" <?php echo $career->branch_id =='11' ? 'selected' : ''; ?>>Dagupan</option>
                    <option value="12" <?php echo $career->branch_id =='12' ? 'selected' : ''; ?>>La Union</option>
                    <option value="13" <?php echo $career->branch_id =='13' ? 'selected' : ''; ?>>Legazpi</option>
                    <option value="14" <?php echo $career->branch_id =='14' ? 'selected' : ''; ?>>Naga</option>
                    <option value="15" <?php echo $career->branch_id =='15' ? 'selected' : ''; ?>>NHFC</option>
                    <option value="16 " <?php echo $career->branch_id =='16' ? 'selected' : ''; ?>>Novaliches</option>
                    <option value="17" <?php echo $career->branch_id =='17' ? 'selected' : ''; ?>>Roxas</option>
                    <option value="18" <?php echo $career->branch_id =='18' ? 'selected' : ''; ?>>San Juan</option>
                    <option value="19" <?php echo $career->branch_id =='19' ? 'selected' : ''; ?>>San Pablo</option>
                    <option value="20" <?php echo $career->branch_id =='20' ? 'selected' : ''; ?>>Santiago</option>
                    <option value="21" <?php echo $career->branch_id =='21' ? 'selected' : ''; ?>>Solano</option>
                    <option value="22" <?php echo $career->branch_id =='22' ? 'selected' : ''; ?>>Tabuk</option>
                    <option value="23" <?php echo $career->branch_id =='23' ? 'selected' : ''; ?>>Vigan</option>
                    <option value="24" <?php echo $career->branch_id =='24' ? 'selected' : ''; ?>>Zambales</option>
                </select>
            </div>
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $career->title, [ 'class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('education', 'Education')}}
                {{Form::text('education', $career->education, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('gender', 'Gender')}}
                <select class="form-control" name="gender">
                    <option value="male" <?php echo $career->gender =='male' ? 'selected' : ''; ?>>Male</option>
                    <option value="female" <?php echo $career->gender =='female' ? 'selected' : ''; ?>>Female</option>
                </select>
            </div>
            <div class="form-group">
                {{Form::label('status', 'Status')}}
                <select class="form-control" name="status">
                    <option value="single" <?php echo $career->status =='single' ? 'selected' : ''; ?>>Single</option>
                    <option value="married" <?php echo $career->status =='married' ? 'selected' : ''; ?>>Married</option>
                    <option value="separeted" <?php echo $career->status =='separeted' ? 'selected' : ''; ?>>Separeted</option>
                    <option value="widow" <?php echo $career->status =='widow' ? 'selected' : ''; ?>>Widow</option>
                </select>
            </div>
            <div class="form-group">
                {{Form::label('age', 'Age Range')}}
                {{Form::text('age', $career->age_range, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', $career->description, ['id' => 'ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection