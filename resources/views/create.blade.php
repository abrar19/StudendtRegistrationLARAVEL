@extends('master');
@section('content');
  <h2>Create New Student</h2>
  
  <form class="form-horizontal" action="{{ route('store') }}" method="post">

  {{ csrf_field() }}
  <div class="form-group">
    <label class="control-label col-sm-2" for="name">Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="registration_id">Registration No:</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="registration_id" id="registration_id" placeholder="Enter Reg ID">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department_name">Dept Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="department_name" id="department_name" placeholder="Enter Dept Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="info">Info:</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="info" id="info" placeholder="Enter Info" rows="10"></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-danger">Register</button>
    </div>
  </div>
</form>
    
    </div>
  </form>
@endsection  
  </table>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>