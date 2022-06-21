@extends('layouts.nav')

@section('main')
<div class="container pt-5">
    <h2> Search Employee checked in for current Month</h2>
    @if (session()->has('success'))
      <div class="alert alert-info" role="alert">
        <strong>{{ session()->get('success') }}</strong>
      </div>
    @endif

<form method="get" action="/searchbyemployee">
   @csrf
    <div>
     <label>Employee Name:</label>
     <input type="text" name="employee_name"  value="{{request('employee_name')}}" required>
     @if($errors->has('employee_name'))
     <p class="text-danger">{{ $errors->first('employee_name') }}</p>
   @endif
     <input type="submit" value="search" >
    </div>
</form>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Employee</th>
        <th>Check In time</th>
      </tr>
    </thead>
    <tbody>
       
      @isset($employees)
            
        
            
       
        @foreach ($employees as $employees)
     
         
        <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $employees->uniqueId}}</td>
        <td>{{ $employees->employee_name}}</td>
        
        <td>{{ $employees->created_at}}</td>
      </tr>
      
      @endforeach


      @endisset
 

      </tr>
    </tbody>
  </table>

  {{-- {{ $employees->links() }} --}}
</div>

@endsection

