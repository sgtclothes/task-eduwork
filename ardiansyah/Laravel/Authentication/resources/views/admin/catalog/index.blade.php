@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <div class="card">
                        <div class="card-header">
                            <a href="{{ url('catalog/create') }}" class="btn btn-sm btn-primary pull-right">Create New Catalog</a>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Total Buku</th>
                                        <th class="text-center">Created At</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catalogs as $key => $catalog)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $catalog->name }}</td>
                                            <td class="text-center">{{ count($catalog->books) }}</td>
                                            <td class="text-center">{{ date('H:i:s - d M Y', strtotime($catalog->created_at)) }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('catalog/'.$catalog->id.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="{{ url('catalog', ['id' => $catalog->id]) }}" method="post">
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
