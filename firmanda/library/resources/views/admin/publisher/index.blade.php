@extends('layouts.admin')
@section('tittle','publisherPage')
@section('header')
publisher
@endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Publisher Data</h3>
      <br>
      <a href="{{url('publishers/create')}}" class="btn btn-primary">create new publisher</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Phone Number</th>
            <th class="text-center">Address</th>
            <th class="text-center">Created At</th>
            <th class="text-center">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($publishers as $key=>$publisher)
          <tr>
            <td>
                {{$key+1}}
            </td>
            <td>
                {{$publisher->name}}
            </td>
            <td>
              {{$publisher->email}}
            </td>
            <td>
                {{$publisher->phone_number}}
            </td>
            <td>
                {{$publisher->address}}
            </td>
            <td>
                {{$publisher->created_at->format('d M Y')}}
            </td>
            <td>
                <a href="{{url('publishers/'.$publisher->id.'/edit')}}" class="btn btn-warning">Edit</a>
                <form action="{{url('publishers/'.$publisher->id)}}" method="POST" class="d-inline" >
                    @csrf
                    {{method_field('DELETE')}}
                    <button type="submit" class="btn btn-danger" onclick="return confirm('want to delete?')">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    {{-- <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </div> --}}
  </div>
@endsection