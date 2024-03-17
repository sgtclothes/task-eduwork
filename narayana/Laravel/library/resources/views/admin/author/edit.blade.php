@extends('layouts.admin')
@section('header', 'Author')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Authors</h3>
                </div>
                <form action="{{ url('authors/'.$author->id) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name..." required="" value="{{ $author->name }}">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email..." required="" value="{{ $author->email }}">
                            <label>Phone Number</label>
                            <input type="text" name="phone_number" class="form-control" placeholder="Enter Phone Number..." required="" value="{{ $author->phone_number }}">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address..." required="" value="{{ $author->address }}">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </form>
            </div>
@endsection