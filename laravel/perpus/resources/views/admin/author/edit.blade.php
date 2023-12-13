@extends('layouts.admin')

@section('header', 'Author')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Edit Author</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('authors/'.$author->id) }}" method="POST">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required value="{{ $author->name }}">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required value="{{ $author->email }}">
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" name="phone_number" class="form-control" placeholder="Enter Phone Number" required value="{{ $author->phone_number }}">
                                </div>
                                <div class="form-group">
                                    <label>Adress</label>
                                    <input type="text" name="address" class="form-control" placeholder="Enter Address" required value="{{ $author->address }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.card -->
@endsection
