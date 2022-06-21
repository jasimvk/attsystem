@extends('layouts.app')

@section('main')

<div class="container pt-5">
  <h2>New Employee </h2>
  <div class="row">
    <div class="col-sm-4">
      <form method="POST" action="/employee-store">
        @csrf
        <label>Employee Name</label>
        <input type="text" name ="employee_name" class="form-control" value="{{ old('employee_name') }}"/>
        @if($errors->has('employee_name'))
          <p class="text-danger">{{ $errors->first('employee_name') }}</p>
        @endif
        <label>Unique ID</label>
        <input type="text" name ="uniqueId" class="form-control" value="{{ old('uniqueId') }}"/>
        @if($errors->has('uniqueId'))
          <p class="text-danger">{{ $errors->first('uniqueId') }}</p>
        @endif
     
        <button class="btn btn-info mt-4" type="submit">Create</button>

      </form>
    </div>
  </div>
 
</div>

@endsection
