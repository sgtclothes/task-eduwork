@extends('layouts.admin')
@section('header', 'Publisher')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Create Publisher</h3>
                </div>
                    <form method="post" action="{{url('publishers')}}">
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" required="" class="form-control" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name="email" type="email" required="" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input name="phone_number" type="text" required="" class="form-control" placeholder="Enter Phone Number">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input name="address" type="text" required="" class="form-control" placeholder="Enter Address">
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection