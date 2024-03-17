@extends('layouts.admin')
@section('header', 'publisher')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card" style="width: 1050px;">
        <div class="card-header">
          <a href="{{ url('publishers/create') }}" class="btn btn-primary pull-right">Create New Publisher</a>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone Number</th>
                <th class="text-center">Adress</th>
                <th class="text-center">Created At</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach($publishers as $key => $publisher)
              <tr>
                <td class="text-center">{{ $key+1 }}</td>
                <td class="text-center">{{ $publisher->name }}</td>
                <td class="text-center">{{ $publisher->email }}</td>
                <td class="text-center">{{ $publisher->phone_number }}</td>
                <td class="text-center">{{ $publisher->address }}</td>
                <td class="text-center">{{  date('d/m/Y', strtotime($publisher->created_at))  }}</td>
                <td class="text-center">
                  <a href="{{  url('publishers/'.$publisher->id.'/edit')  }}" class="btn btn-warning btn-sm">Edit</a>

                  <form action="{{ url('publishers', ['id' => $publisher->id]) }}" method="post">
                    <input class="btn btn-danger btn-sn" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                    @method('delete')
                    @csrf
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
@endsection