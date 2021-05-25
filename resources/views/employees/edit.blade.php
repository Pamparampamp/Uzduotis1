@extends('layouts.app')

@section('content')
<br>
<a  class="btn btn-primary" href="{{ route('Employees.index') }}">Back</a>
<br>
<br>
{{-- <form method="POST" action="{{ route('Employees.update', [$employee->id])}}" --}}
<form method="POST" action="{{ route('Employees.update', $employee->id)}}">
{{-- <form method="POST" action="{{ route('Employees.update', ['employee' => $employee->id]) }}"> --}}
    @csrf

@method('PUT')
  <div class="mb-3">
    <label  class="form-label">First Name</label>
    <input type="text" name="Firstname" class="form-control" >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">Last Name</label>
    <input type="text" name="Lastname" class="form-control" >
  </div>
  <div class="mb-3 ">
      <label class="form-check-label" for="text">Company_id</label>
    <input type="text" name="isbn"   class="form-control">

  </div>
  <div class="mb-3 ">
      <label class="form-check-label" for="text">Email</label>
    <input type="email" name="email"   class="form-control">
      <br>

  </div>
    <div class="mb-3 ">
      <label class="form-check-label" for="text">Phone</label>
    <input type="text" name="phone"   class="form-control">

  </div>


  <button type="submit" class="btn btn-info">Submit</button>
</form>
@endsection
