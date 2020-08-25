@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>Branches List</h2>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Officer In Charge</th>
          <th scope="col">Company</th>
          <th scope="col">Address</th>
          <th scope="col">
            Action
            <a href="/newhorizon/public/dashboard/branches/create" class="btn-sm btn-primary pull-right">ADD</a>
          </th> 
        </tr>
      </thead>
      <tbody>
        @foreach ($branches1 as $branch)
          <tr>
              <th scope="row">{{ $branch->name }}</th>
              <td>{{ $branch->officer_in_charge }}</td>
              <td>{{ $branch->company }}</td>
              <td>{{ str_limit($branch->address, 50) }}</td>
              <td>
                <a href="/newhorizon/public/dashboard/branches/{{$branch->id}}/edit" class="btn-sm btn-primary">Edit</a>
                {!!Form::open(['action' => ['BranchesController@destroy', $branch->id], 'method' => 'POST',])!!}
                  {{Form::hidden('_method', 'PUT')}}
                  {{Form::submit('Delete', ['class' => 'btn btn-xs btn-danger'])}}
                {!!Form::close()!!}
              </td>
          </tr>
        @endforeach()
      </tbody>
    </table>
    
  </div>
@endsection

<script>
    // Get the modal
    var modal = document.getElementById("myModal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    
    // When the user clicks the button, open the modal 
    btn.onclick = function() {
      modal.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
      modal.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
</script>