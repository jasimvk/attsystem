@extends('layouts.app')

@section('main')
 

<div class="container pt-5  float-center">
  <h2>Checkin</h2>
  @if (session()->has('success'))
    <div class="alert alert-info" role="alert">
      <strong>{{ session()->get('success') }}</strong>
    </div>
  @endif 
  <div class="row">
    <div class="col-sm-4">
      <form method="POST" action="/checkin">
        @csrf
        {{-- @method('put') --}}
        
        <label>Unique ID</label>
        <input type="text" name ="uniqueId" class="form-control" required/>
        @if($errors->has('uniqueId'))
          <p class="text-danger">{{ $errors->first('uniqueId') }}</p>
        @endif
        
        
        
        <button class="btn btn-info mt-4" type="submit">Checkin</button>

      </form>
    </div>
  </div>
 
</div>

@endsection