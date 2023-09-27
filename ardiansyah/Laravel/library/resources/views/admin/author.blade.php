@extends('layouts.admin')
@section('header', 'Author')

@push('css')
<style type="text/css">

</style>
@endpush

@section('content')
<div id="controller">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="#" class="btn btn-sm btn-primary pull-right">Create New Author</a>
                </div>
                <div class="card-body p-0">
                    <table id="example2" class="table table-striped">
                        <thead>
                            <tr>
                                <th width="30px">No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th class="text-right">Action</th>
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
                                    <td class="text-right">
                                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
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
