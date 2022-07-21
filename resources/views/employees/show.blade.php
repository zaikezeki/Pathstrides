@extends('employees.layout')
@section('content')
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Employee Name : {{ $employees-> name }}</h5>
        <p class="card-text">Email : {{ $employees->email }}</p>
        <p class="card-text">Contanct Number : {{ $employees->number }}</p>
  </div>
      
    </hr>
  
  </div>
</div>