@extends('layouts.app')

@section('content')
<br>
<a  class="btn btn-primary" href="{{ route('Companies.index') }}">Back</a>
<br>
<br>

<form method="POST" action="{{ route('Companies.update', $company->id)}}">
    @csrf


@method('PUT')
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" class="form-control" required >

  </div>
  <div class="mb-3">
    <label for="text" class="form-label">email</label>
    <input type="text" name="email" class="form-control" >
  </div>
   <div class="mb-3">
    <label  class="form-label">logo</label>
    <input type="text" name="logo" class="form-control" >

  </div>
 <div class="mb-3">
    <label  class="form-label">website</label>
    <input type="text" name="website" class="form-control" >

  </div>



 <div class="mb-3">
  <button type="submit" class="btn btn-info">Submit</button>
  </div>

</form>
@endsection
