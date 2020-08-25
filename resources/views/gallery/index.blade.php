@extends('layouts.app')

    @section('content')
        <div class="container">
            <h2>Gallery List</h2>
            <table class="table table-striped">
                <thead>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Order_no</th>
                    <th>
                        Action  
                        <a href="/newhorizon/public/dashboard/gallery/create" class="btn-sm btn-primary pull-right">ADD</a>
                    </th>
                </thead>
                <tbody>
                    @foreach($galleries as $gallery)
                        <tr>
                            <td>{{$gallery->title}}</td>
                            <td><img width=200px src="/newhorizon/public/{{$gallery->image}}" alt=""></td>
                            <td>{{$gallery->order_no}}</td>
                            <td>
                            <a href="/newhorizon/public/dashboard/gallery/{{$gallery->id}}/edit" class="btn-sm btn-primary pull-rgiht">Edit</a>
                            {!!Form::open(['action' => ['GalleryController@destroy', $gallery->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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
