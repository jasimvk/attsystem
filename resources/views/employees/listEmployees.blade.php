@extends('layouts.nav')

@section('main')



<div class="container pt-5">
  <h2> List of Employees checked in for today</h2>
  @if (session()->has('success'))
    <div class="alert alert-info" role="alert">
      <strong>{{ session()->get('success') }}</strong>
    </div>
  @endif
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>UniqueID</th>
        <th>Employee</th>
        <th>Check in Time</th>
      </tr>
    </thead>
    <tbody>


 

        @foreach ($employees as $employees)
     
         
        <tr>
        <td>{{ $loop->index+1 }}</td>
   
       
        <td>{{ $employees->uniqueId}}</td>
        <td>{{ $employees->employee_name}}</td>
        <td>{{ $employees->created_at}}</td>
      </tr>
      
      @endforeach
      </tr>
    </tbody>
  </table>

  {{-- {{ $employees->links() }} --}}
</div>

@endsection

