@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Contanct Number</label></br>
        <input type="text" name="number" id="number" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop