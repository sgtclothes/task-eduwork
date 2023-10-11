@extends('layouts.admin')
@section('title', 'Publishers')
@section('css')

@endsection

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
        <div class="container-fluid" id="controller">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">List Of @yield('title')</h3>
                        </div>
                        <div class="card-body">
                            <a href="#" @click="addData()" class="btn btn-success"><i class="fas fa-plus"></i> Create</a>
                            <table id="example1" class="table table-border table-hover text-center">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Publisher Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Total Books</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                @foreach ($publishers as $key => $publisher)
                                <tbody>
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $publisher->name }}</td>
                                    <td>{{ $publisher->email }}</td>
                                    <td>{{ $publisher->phone_number }}</td>
                                    <td>{{ count($publisher->books) }}</td>
                                    <td>
                                        <a href="#" @click="editData({{ $publisher }})" class="btn btn-warning text-white">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="#" @click="deleteData({{ $publisher->id }})" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
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
            <div class="modal fade" id="modal-lg">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form :action="actionUrl" method="post" enctype="multipart/form-data">
                            <div class="modal-header">
                                <h4 class="modal-title">Publisher</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @csrf
                                <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                                <div class="form-group">
                                    <label for="name">Publisher Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" :value="data.name" placeholder="Input Name" id="name">
                                    @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" :value="data.email" placeholder="Input Email" id="email">
                                    @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" :value="data.phone_number" placeholder="Input Phone Number" id="phone_number">
                                    @error('phone_number')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" :value="data.address" placeholder="Input Address" id="">
                                    @error('address')
                                        <span class="text-danger">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
@endsection
@section('js')
    <script type="text/javascript">
        var controller = new Vue({
            el: '#controller',
            data: {
                data : {},
                actionUrl : '{{ url('publishers') }}',
                editStatus : false
            },
            mounted: function() {
            },
            methods: {
                addData() {
                    this.data = {};
                    this.actionUrl = '{{ url('publishers') }}';
                    this.editStatus = false;
                    $('#modal-lg').modal();
                },
                editData(data) {
                    this.data = data;
                    this.actionUrl = '{{ url('publishers') }}'+'/'+data.id;
                    this.editStatus = true;
                    $('#modal-lg').modal();
                },
                deleteData(id) {
                    this.actionUrl = '{{ url('publishers') }}'+'/'+id;
                    if(confirm("Are You Sure Delete?")) {
                        axios.post(this.actionUrl, {_method: 'DELETE'}).then(response => {
                            location.reload();
                        });
                    }
                }
            }
        });
    </script>
@endsection
