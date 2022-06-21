@extends('layouts.app')

@section('main')

<div class="container pt-5">
  <h2>Checkin</h2>
  <div class="row">
    <div class="col-sm-4">
      <form method="POST" action="/employee-checkin/">
        @csrf
        @method('put')
        
        <label>Unique ID</label>
        <input type="text" name ="uuid" class="form-control""/>
        
        
        
        <button class="btn btn-info mt-4" type="submit">Checkin</button>

      </form>
    </div>
  </div>
 
</div>

@endsection
