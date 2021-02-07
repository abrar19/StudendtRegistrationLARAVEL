@extends('master');
@section('content');
  <table class="table table-responsive table-hover">
      <tr>
          <th>Serial</th>
          <th>Name</th>
          <th>Reg ID</th>
          <th>Department Name</th>
          <th>Info</th>
          <th>Action</th>
      </tr>
  @foreach($students as $student)
      <tr>
          <td>{{ $student->id }}</td>
          <td>{{ $student->name }}</td>
          <td>{{ $student->registration_id }}</td>
          <td>{{ $student->department_name }}</td>
          <td>{{ $student->info }}</td>
          <td>
            <a href="#" class="btn btn-success">Edit</a>
          </td>
      </tr>
  @endforeach  
@endsection  
  </table>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>