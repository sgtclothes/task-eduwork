@extends('layouts.admin')

@section('header', 'Catalog')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Catalog</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Total Books</th>
                        <th class="text-center">Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($catalogs as $key => $catalog)
                    <tr>
                        <td class="text-center">{{ $key+1 }}</td>
                        <td>{{ $catalog->name }}</td>
                        <td class="text-center">{{ count($catalog->books) }}</td>
                        <td class="text-center">{{ date('H:i:s - d/M/Y', strtotime($catalog->created_at)) }}</td>
                    @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
