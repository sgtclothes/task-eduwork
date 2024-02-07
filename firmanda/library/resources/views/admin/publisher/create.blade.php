@extends('layouts.admin')
@section('tittle','publisherPage')
@section('header')
publisher
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">create new publisher</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url ('publishers')}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label >Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter name" required="">
        </div>
        <div class="form-group">
            <label >Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required="">
          </div>
        <div class="form-group">
            <label >Phone Number</label>
            <input type="text" class="form-control" name="phone_number" placeholder="Enter phone number" required="">
          </div>
          <div class="form-group">
            <label >Address</label>
            <input type="text" class="form-control" name="address" placeholder="Enter adress" required="">
          </div>
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection