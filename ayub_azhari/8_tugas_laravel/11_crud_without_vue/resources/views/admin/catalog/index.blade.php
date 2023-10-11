@extends('layouts.admin')
@section('title', 'Catalog')

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
                            <a href="{{ url('catalogs/create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Create</a>
                            <table id="example1" class="table table-border table-hover">
                                <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Catalog Name</th>
                                    <th>Total Book</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach ($catalogs as $key => $catalog )
                                <tbody>
                                <tr class="text-center">
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $catalog->name }}</td>
                                    <td>{{ count($catalog->books) }}</td>
                                    <td>{{ date('h:i:s - d M Y', strtotime($catalog->created_at)) }}</td>
                                    <td>{{ date('h:i:s - d M Y', strtotime($catalog->updated_at)) }}</td>
                                    <td>
                                        <form action="{{ url('catalogs', ['id' => $catalog->id]) }}" method="POST" onsubmit="return confirm('Are You Sure Delete?');">
                                            <a href="{{ url('catalogs/'.$catalog->id.'/edit') }}" class="btn btn-warning text-white">
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
