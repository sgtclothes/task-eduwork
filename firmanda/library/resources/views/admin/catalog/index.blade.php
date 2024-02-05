@extends('layouts.admin')
@section('tittle')
    catalogPage
@endsection
@section('header')
catalog
@endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Catalog Data</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th class="text-center">Name</th>
            <th class="text-center">Total Books</th>
            <th class="text-center">Date Created</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach ($catalogs as $key=>$catalog)
              
          
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$catalog->name}}</td>
            <td class="text-center">
              {{count($catalog->books)}}
            </td>
            <td class="text-center">
              
              {{  date('d/m/y - h:i:s', strtotime($catalog->created_at))}}
            </td>
           
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    {{-- <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </div> --}}
  </div>
  <!-- /.card -->
@endsection