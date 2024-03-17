@extends('layouts.admin')
@section('header', 'Author')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Ceate New Author</h3>
                </div>
                <form action="{{ url('authors') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name..." required="">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email..." required="">
                            <label>Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" placeholder="Enter Phone Number..." required="">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address..." required="">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
@endsection