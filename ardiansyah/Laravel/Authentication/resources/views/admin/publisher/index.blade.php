@extends('layouts.admin')
@section('header', 'Publisher')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('publisher/create') }}" class="btn btn-sm btn-primary pull-right">Create New Publisher</a>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">No Hp</th>
                                        <th class="text-center">Alamat</th>
                                        <th class="text-center">Total Buku</th>
                                        <th class="text-center">Created At</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($publishers as $key => $publisher)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $publisher->name }}</td>
                                            <td>{{ $publisher->email }}</td>
                                            <td>{{ $publisher->phone_number }}</td>
                                            <td>{{ $publisher->address }}</td>
                                            <td class="text-center">{{ count($publisher->books) }}</td>
                                            <td class="text-center">{{ date('d M Y', strtotime($publisher->created_at)) }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('publisher/'.$publisher->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ url('publisher', ['id' => $publisher->id]) }}" method="post">
                                                    <input class="btn btn-sm btn-danger" type="submit" value="Delete" onclick="return confirm('Are you sure?')">
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
                </div>
            </div>
        </div>
    </section>
@endsection
