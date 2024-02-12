@extends('layouts.admin')
@section('tittle','publisherPage')
@section('header')
publisher
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit publisher</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('publishers/'.$publisher->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}

      <div class="card-body">
        <div class="form-group">
          <label >Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$publisher->name}}">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{$publisher->email}}">
          </div>
        <div class="form-group">
            <label >Phone Number</label>
            <input type="number" class="form-control" name="phone_number" placeholder="Enter phone number" value="{{$publisher->phone_number}}">
          </div>
          <div class="form-group">
            <label >Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter adress" value="{{$publisher->address}}">
          </div>
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection