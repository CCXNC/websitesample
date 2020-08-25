@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Careers List</h2>
      <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Branch</th>
              <th scope="col">Title</th>
              <th scope="col">Address</th>
              <th scope="col">
                  <a href="/newhorizon/public/dashboard/careers/create" class="btn btn-primary btn-sm pull-right">ADD</a>
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($careers as $career)
              <tr>
                  <th scope="row">{{ $career->name }}</th>
                  <td>{{ $career->title }}</td>
                  <td>{{ $career->address }}</td>
                  <td>
                      <a href="/newhorizon/public/dashboard/careers/{{$career->id}}/edit" class="btn-sm btn-primary">Edit</a>
                      {!!Form::open(['action' => ['CareersController@destroy', $career->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-xs btn-danger'])}}
                      {!!Form::close()!!}

                  </td>
              </tr>
            @endforeach()
          </tbody>
      </table>
    </div>
@endsection