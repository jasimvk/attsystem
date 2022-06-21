@extends('layouts.app')

@section('main')

<div class="container pt-5">
  <h2>Edit Employee </h2>
  <div class="row">
    <div class="col-sm-4">
      <form method="POST" action="/employee-update/{{ $employees->id }}">
        @csrf
        @method('put')
        <label>Employee Name</label>
        <input type="text" name ="employee_name" class="form-control" value="{{ $employees->employee_name }}"/>
        <label>Unique ID</label>
        <input type="text" name ="uniqueId" class="form-control" value="{{ $employees->uniqueId }}"/>
        @if($errors->has('uniqueId'))
        <p class="text-danger">{{ $errors->first('uniqueId') }}</p>
      @endif

      <div class="form-group">
        <label for="status">Status</label>
        <select id="status" name="status" class="form-control">
            <option value="">{{ $employees->status }}</option>
            <option value="disable"> Disable </option>
            <option value="active">Active</option>
         
        </select>
       
    </div>
        
        <br>
        <button class="btn btn-info mt-4" type="submit">Update</button>

      </form>
    </div>
  </div>
 
</div>

@endsection
