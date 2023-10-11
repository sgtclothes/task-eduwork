@extends('layouts.admin')
@section('title', 'Member')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('title')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Of @yield('title')</h3>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-border table-hover text-center">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Member Name</th>
                                    <th>Gender</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                </tr>
                                </thead>
                                @foreach ($members as $key => $member)
                                <tbody>
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $member->name }}</td>
                                    <td>{{ $member->gender }}</td>
                                    <td>{{ $member->email }}</td>
                                    <td>{{ $member->phone_number }}</td>
                                </tr>
                                </body>
                                @endforeach
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
@endsection
