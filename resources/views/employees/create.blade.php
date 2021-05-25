@extends('layouts.app')

@section('content')
<br>
<a  class="btn btn-primary" href="{{ route('Employees.index') }}">Back</a>
<br>
<br>

<form method="POST" action="{{ route('Employees.store')}}">
    @csrf
  <div class="mb-3">
    <label  class="form-label">First Name</label>
    <input type="text" name="Firstname" class="form-control" required >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Last Name</label>
    <input type="text" name="Lastname" class="form-control" required>
  </div>
  <div class="mb-3 ">
      <label class="form-check-label" for="text">Company id</label>
    <input type="text" name="Company_id"  class="form-control">

  </div>
  <div class="mb-3 ">
      <label class="form-check-label" for="text">Email</label>
      <br>
       <input type="email" name="email"  class="form-control">
  </div>
  <div class="mb-3 ">
      <label class="form-check-label" for="text">Phone</label>
    <input type="text" name="phone"  class="form-control">
<br>
  <button type="submit" class="btn btn-warning">Submit</button>
</form>




@endsection
