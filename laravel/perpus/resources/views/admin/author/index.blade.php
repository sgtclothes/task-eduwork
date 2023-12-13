@extends('layouts.admin')

@section('header', 'Author')

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{ url('authors/create') }}" class="btn btn-primary btn-sm pull-right">Create New Author</a>
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
                    @foreach($authors as $key => $author)
                    <tr>
                        <td class="text-center">{{ $key+1 }}</td>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->email }}</td>
                        <td class="text-center">{{ $author->phone_number }}</td>
                        <td>{{ $author->address }}</td>
                        <td class="text-center">{{ date('H:i:s - d/M/Y', strtotime($author->created_at)) }}</td>
                        <td>
                            <a href="{{ url('authors/'.$author->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ url('authors', ['id' => $author->id]) }}" method="POST">
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('Are You Sure ??')">
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
