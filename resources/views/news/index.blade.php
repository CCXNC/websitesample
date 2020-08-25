@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>News List</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Image</th>
          <th scope="col">Content</th>
          <th scope="col"> 
            Action
            <a href="/newhorizon/public/dashboard/news/create" class="btn-sm btn-primary pull-right">ADD</a>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($news as $new)
          <tr>
              <th scope="row">{{ $new->title }}</th>
              <td> <img  width=200px src="/newhorizon/public/{{$new->image}}" alt=""></td>
              <td>{!! str_limit($new->content, 50) !!}</td>
              <td>
              <a href="/newhorizon/public/dashboard/news/{{$new->id}}/edit" class="btn-sm btn-primary">Edit</a>
              {!!Form::open(['action' => ['NewsController@destroy', $new->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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