@extends('layouts.admin')

@section('header', 'Author')

@section('css')

@endsection

@section('content')
    <div id="controller">
        <div class="card">
            <div class="card-header">
                <a href="#" @click="addData()" class="btn btn-primary btn-sm pull-right">Create New Author</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone Number</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $key => $author)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}.</td>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->email }}</td>
                                <td class="text-center">{{ $author->phone_number }}</td>
                                <td>{{ $author->address }}</td>
                                <td class="text-right">
                                    <a href="#" @click="editData({{ $author }})" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" @click="deleteData({{ $author->id }})" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form :action="actionUrl" method="POST" autocomplete="off">
                        <div class="modal-header">
                            <h4 class="modal-title">Author</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf

                            <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name"
                                    :value="data.name" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email"
                                    :value="data.email" required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="phone_number" class="form-control"
                                    placeholder="Enter Phone Number" :value="data.phone_number" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" placeholder="Enter Address"
                                    :value="data.address" required>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    </div>

@endsection

@section('js')
    <script type="text/javascript">
        var controller = new Vue({
            el: '#controller',
            data: {
                data: {},
                actionUrl: '{{ url('authors') }}'
            },
            mounted: function() {

            },
            methods: {
                addData() {
                    this.data = {};
                    this.actionUrl = '{{ url('authors') }}';
                    this.editStatus = false;
                    $('#modal-default').modal();
                },
                editData(data) {
                    this.data = data;
                    this.actionUrl = '{{ url('authors') }}'+'/'+data.id;
                    this.editStatus = true;
                    $('#modal-default').modal();
                },
                deleteData(id) {
                    this.actionUrl = '{{ url('authors') }}'+'/'+id;
                    if (confirm("Are You Sure ?")) {
                        axios.post(this.actionUrl, {_method: 'DELETE'}).then(response => {
                            location.reload();
                        });
                    }
                }
            }
        });
    </script>
@endsection
