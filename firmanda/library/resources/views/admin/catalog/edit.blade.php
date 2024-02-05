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
      <h3 class="card-title">edit catalog</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{url('catalogs/'.$catalog->id)}}" method="POST">
        @csrf
        {{method_field('PUT')}}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Name of catalog</label>
          <input type="text" class="form-control" name="name"  placeholder="Enter Name" required='' value="{{$catalog->name}}">
        </div>
        
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection