@extends('layouts.main')
@section('header', 'Role')

@section('content')
    <div id="app">
        <div class="row">
            {{-- form create new role --}}
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Form new role</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('roles') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter role name" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
            {{-- table --}}
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List data role</h3>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr align="center" style="text: bold">
                                    <th style="width: 10px">No</th>
                                    <th>Name</th>
                                    <th>Created At</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td align="center">{{ date('D, d F Y', strtotime($role->created_at)) }}</td>
                                        <td align="center">
                                            <form action="{{ url('catalogs', ['id' => $role->id]) }}" method="POST">
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
                </div>
            </div>
        </div>
    </div>
@endsection
