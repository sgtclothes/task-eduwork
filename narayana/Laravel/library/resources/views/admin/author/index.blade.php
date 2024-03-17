@extends('layouts.admin')
@section('header', 'Author')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="card" style="width: 1050px;">
        <!-- <div class="card-header">
          <a href="{{ url('authors/create') }}" class="btn btn-primary pull-right">Create New Author</a>
        </div> -->
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
                <!-- <th class="text-center">Action</th> -->
              </tr>
            </thead>
            <tbody>
            @foreach($author as $key => $author)
              <tr>
                <td class="text-center">{{ $key+1 }}</td>
                <td class="text-center">{{ $author->name }}</td>
                <td class="text-center">{{ $author->email }}</td>
                <td class="text-center">{{ $author->phone_number }}</td>
                <td class="text-center">{{ $author->address }}</td>
                <td class="text-center">{{  date('d/m/Y', strtotime($author->created_at))  }}</td>
                <!-- <td class="text-center">
                  <a href="{{  url('authors/'.$author->id.'/edit')  }}" class="btn btn-warning btn-sm">Edit</a>

                  <form action="{{ url('authors', ['id' => $author->id]) }}" method="post">
                    <input class="btn btn-danger btn-sn" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
                    @method('delete')
                    @csrf
                  </form>
                </td> -->
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
@endsection