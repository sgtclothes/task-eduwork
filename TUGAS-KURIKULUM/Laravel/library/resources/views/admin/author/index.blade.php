@extends('layouts.admin')
@section('header', 'Author')
@section('content')
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <!-- <h3 class="card-title">Bordered Table</h3> -->
                <a href="#" class="btn btn-primary pull-right">Create New Author</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th style="width: 40px">Name</th>
                                <th style="width: 40px">Email</th>
                                <th style="width: 40px">Phone Number</th>
                                <th style="width: 40px">Address</th>
                                <th style="width: 40px">Total Books</th>
                                <th style="width: 40px">Created At</th>
                                <th style="width: 40px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($authors as $key => $author)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$author['name']}}</td>
                                <td>{{$author['email']}}</td>
                                <td>{{$author['phone_number']}}</td>
                                <td>{{$author['address']}}</td>
                                <td class="text-center">{{COUNT($author['books'])}}</td>
                                <td>{{ date("F j, Y, g:i a", strtotime($author['created_at'])) }}</td>
                                <td>
                                    <a class="btn btn-warning" href="#">Edit</a>
                                    <form action="#" method="post">
                                    <input class="btn btn-danger" type="submit" value="Delete" onclick="return confirm('Are You Sure?');">
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
</body>
</html>

@endsection
