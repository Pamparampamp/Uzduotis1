@extends('layouts.app')
@section( 'content')


 <a  class="btn btn-primary"  href="{{ route('Employees.create') }}">create employee</a>


{{-- <div class="card-body">
<form class="form-inline" action="{{ route('Employees.index') }}" method="GET">
<select name="author_id" id="" class="form-control">
<option value="" selected disabled>Pasirinkite knygą filtravimui:</option>
@foreach ($books as $book)
<option value="{{ $book->id }}"
@if($book->id == app('request')->input('book'))
selected="selected"
@endif>{{ $book->title }}</option>
@endforeach
</select>
<button type="submit" class="btn btn-primary">Spausti čia</button>
<a class="btn btn-success" href={{ route('Employees.index') }}>Rodyti visus</a>
</form>
</div> --}}



<table class="table">
  <thead>
    <tr>

      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Company id</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($employees as $employee)


    <tr>
        <td>{{ $employee->Firstname }}</td>
      <td>{{ $employee->Lastname }}</td>
      <td>{{ $employee->company_id }}</td>
      <td>{{  $employee->email  }}</td>
<td>{{ $employee->phone }}</td>
       <td>
        <form action="{{ route('Employees.destroy', $employee->id) }}" method="post">
 <a  class="btn btn-primary"  href="{{ route('Employees.edit', $employee->id) }}">Edit</a>

            @method('DELETE')
            @csrf
                <button class="btn btn-danger"  name="destroy">Delete</button>


        </form>




       </td>
    </tr>
@endforeach
  </tbody>
</table>
@endsection
