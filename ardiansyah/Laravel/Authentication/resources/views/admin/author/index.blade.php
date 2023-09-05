@extends('layouts.admin')
@section('header', 'Author')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header">
                            <h3>Data Author</h3></a>
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
                                        <th class="text-center">Created At</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($authors as $key => $author)
                                        <tr>
                                            <td>{{ $key+1 }}</td>
                                            <td>{{ $author->name }}</td>
                                            <td>{{ $author->email }}</td>
                                            <td>{{ $author->phone_number }}</td>
                                            <td>{{ $author->address }}</td>
                                            <td class="text-center">{{ date('d M Y', strtotime($author->created_at)) }}</td>
                                            

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
