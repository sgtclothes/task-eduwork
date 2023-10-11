@extends('layouts.admin')
@section('title', 'Publisher')

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
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
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
                            <h3 class="card-title">List of @yield('title')</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <a href="{{ url('publishers/create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Create</a>
                            <table id="example1" class="table table-border table-hover">
                                <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Publisher Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Total Book</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach ($publishers as $key => $publisher )
                                <tbody>
                                <tr class="text-center">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $publisher->name }}</td>
                                    <td>{{ $publisher->email }}</td>
                                    <td>{{ $publisher->phone_number }}</td>
                                    <td>{{ count($publisher->books) }}</td>
                                    <td>
                                        <form action="{{ url('publishers', ['id' => $publisher->id]) }}" method="POST" onsubmit="return confirm('Are You Sure Delete?');">
                                            <a href="{{ url('publishers/'.$publisher->id.'/edit') }}" class="btn btn-warning text-white">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                </body>
                                @endforeach
                            </table>
                        </div>
                        <!-- /.card-body -->
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
