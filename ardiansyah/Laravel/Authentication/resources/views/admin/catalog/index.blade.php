@extends('layouts.admin')
@section('header', 'Catalog')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Catalog</h3>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Total Buku</th>
                                        <th class="text-center">Created At</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($catalogs as $key => $catalog)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $catalog->name }}</td>
                                            <td class="text-center">{{ count($catalog->books) }}</td>
                                            <td class="text-center">{{ date('H:i:s - d M Y', strtotime($catalog->created_at)) }}</td>

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