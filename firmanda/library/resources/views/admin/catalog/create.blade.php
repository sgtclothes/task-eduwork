@extends('layouts.admin')
@section('tittle')
    catalogPage
@endsection
@section('header')
catalog
@endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">create new catalog</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('catalogs')}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name of catalog</label>
          <input type="text" class="form-control" name="name"  placeholder="Enter Name" required=''>
        </div>
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection