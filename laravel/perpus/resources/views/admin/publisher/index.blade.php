@extends('layouts.admin')

@section('header', 'Publisher')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Publishers</h3>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($publishers as $key => $publisher)
                    <tr>
                        <td class="text-center">{{ $key+1 }}</td>
                        <td>{{ $publisher->name }}</td>
                        <td>{{ $publisher->email }}</td>
                        <td class="text-center">{{ $publisher->phone_number }}</td>
                        <td>{{ $publisher->address }}</td>
                        <td class="text-center">{{ date('H:i:s - d/M/Y', strtotime($publisher->created_at)) }}</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
