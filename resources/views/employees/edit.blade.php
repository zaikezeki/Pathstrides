@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="firstname" value="{{$employees->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="address" id="email" value="{{$employees->email}}" class="form-control"></br>
        <label>Contanct Number</label></br>
        <input type="text" name="mobile" id="number" value="{{$employees->number}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop