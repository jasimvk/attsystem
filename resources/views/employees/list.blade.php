@extends('layouts.nav')

@section('main')

<div class="container pt-5">
  <h2>Employees <a class="btn btn-info" href="/employee-create">Add Employee</a></h2>
  @if (session()->has('success'))
    <div class="alert alert-info" role="alert">
      <strong>{{ session()->get('success') }}</strong>
    </div>
  @endif
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Unique ID</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employees )
        
      <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $employees->employee_name}}</td>
        <td>{{ $employees->uniqueId}}</td>
        <td>
            <a href="/employee-edit/{{ $employees->id }}" class="btn btn-sm btn-info">Edit</a>
            <a href="/employee-delete/{{ $employees->id }}" class="btn btn-sm btn-danger">Delete</a>
            
        </td>
      </tr>
      @endforeach
      </tr>
    </tbody>
  </table>

  {{-- {{ $employees->links() }} --}}
</div>

@endsection

