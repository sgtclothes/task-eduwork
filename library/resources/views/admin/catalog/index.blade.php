@extends('layouts.main')
@section('header', 'catalogs')

@section('content')
    <div id="controller">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url('catalogs/create/') }}" class="btn btn-primary">Create new catalog</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr align="center" style="text: bold">
                                    <th style="width: 10px">No</th>
                                    <th>Name</th>
                                    <th>Total Books</th>
                                    <th>Created At</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($catalogs as $key => $catalog)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $catalog->name }}</td>
                                        <td align="center">{{ count($catalog->books) }}</td>
                                        <td align="center">{{ dateFormat($catalog->created_at) }}</td>
                                        {{-- <td align="center">{{ date('D / d F Y', strtotime($catalog->created_at)) }}</td> --}}
                                        <td align="center">
                                            <a href="{{ url('catalogs/' . $catalog->id . '/edit') }}"
                                                class="btn btn-sm btn-warning">edit</a>
                                            <a href="{{ url('print_catalog/' . $catalog->id) }}" target="_blank"
                                                class="btn btn-sm btn-primary">print</a>
                                            <form action="{{ url('catalogs', ['id' => $catalog->id]) }}" method="POST">
                                                <input type="submit" class="btn btn-sm btn-danger mt-1" value="delete"
                                                    onclick="return confirm('Are you sure?')">
                                                @method('delete')
                                                @csrf
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
