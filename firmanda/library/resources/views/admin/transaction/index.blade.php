@extends('layouts.admin')
@section('tittle','transactionPage')
@section('header')
transaction
@endsection
@section('content')
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Catalog Data</h3>
      <br>
      <a href="{{url('transactions/create')}}" class="btn btn-sm btn-primary pull-right"> create new catalog</a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th class="text-center">Member ID</th>
            <th class="text-center">Tanggal Pinjam</th>
            <th class="text-center">Tanggal Harus Dikembalikan</th>
           
            
          </tr>
        </thead>
        <tbody>
          @foreach ($transactions as $key=>$transaction)
              
          
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$transaction->member_id}}</td>
            <td class="text-center">
                {{$transaction->date_start}}
            </td>
            <td class="text-center">
              
              {{  date_convert($transaction->date_end)}}
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
@endsection


