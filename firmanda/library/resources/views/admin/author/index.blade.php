@extends('layouts.admin')
@section('tittle','authorPage')
@section('header')
author
@endsection
@section('content')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Author Data</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Name</th>
                      <th class="center-text">Email</th>
                      <th class="center-text">Phone Number</th>
                      <th class="center-text">Address</th>
                      <th class="center-text">Created Time</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($authors as $key => $author)
                        
                    
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$author->name}}</td>
                      <td>
                       {{$author->email}}
                      </td>
                      <td>
                        {{$author->phone_number}}
                      </td>
                      <td>
                        {{$author->address}}
                      </td>
                      <td>
                        {{$author->created_at}}
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