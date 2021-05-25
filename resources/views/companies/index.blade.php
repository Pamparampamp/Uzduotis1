@extends('layouts.app')
@section( 'content')


 <a  class="btn btn-primary"  href="{{ route('Companies.create') }}">create company</a>

<table class="table">
  <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">email</th>
        <th scope="col">logo</th>
        <th scope="col">website</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($companies as $company)


    <tr>
        <td>{{ $company->id}}</td>
        <td>{{ $company->Name }}</td>
        <td>{{ $company->email  }}</td>
        <td>{{ $company->logo }}</td>
        <td>{{ $company->website }}</td>
       <td>
        {{-- <form action="{{ route('Companies.destroy', $company->id) }}" method="POST">

 <a  class="btn btn-primary"  href="{{ route('Companies.edit', $company->id) }}">Edit</a>

   @csrf
 @method('DELETE')

         <button type="submit" class="btn btn-danger"  name=>Delete</button>
        </form> --}}

        <form class="form-inline" action={{ route('Companies.destroy', $company->id) }} method="POST">
<a class="btn btn-success m-1" href={{ route('Companies.edit', $company->id) }}>Edit</a>
@csrf
 @method('DELETE')
<input type="submit" class="btn btn-danger m-1" value="Delete" />

{{-- @csrf
@method('DELETE')

<button type="submit" class="btn btn-danger">Delete --}}



</form>




       </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection
