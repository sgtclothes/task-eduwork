@extends('layouts.admin')
@section('header', 'Catalog')
@section('content')
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th style="width: 10px">ID</th>
                <th style="width: 40px">Nama</th>
                </tr>
            </thead>
        <tbody>
            @foreach($catalog as $key => $value)
            <tr>
            <th scope="row">{{$value['id']}}</th>
            <td>{{$value['name']}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
</div>
</body>
</html>@endsection
