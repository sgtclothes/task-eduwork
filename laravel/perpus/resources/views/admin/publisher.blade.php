@extends('layouts.admin')

@section('header', 'Publisher')

@section('css')

@endsection

@section('content')
    <div id="controller">
        <div class="card">
            <div class="card-header">
                <a href="#" @click="addData()" class="btn btn-primary btn-sm pull-right">Create New Publisher</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">No.</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Phone Number</th>
                            <th class="text-center">Address</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($publishers as $key => $publisher)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}.</td>
                                <td>{{ $publisher->name }}</td>
                                <td class="text-center">{{ $publisher->email }}</td>
                                <td class="text-center">{{ $publisher->phone_number }}</td>
                                <td class="text-center">{{ $publisher->address }}</td>
                                <td>
                                    <a href="#" @click="editData({{ $publisher }})" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="#" @click="deleteData({{ $publisher->id }})" class="btn btn-danger btn-sm">Delete</a>
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
                    <form :action="actionUrl" method="POST">
                        <div class="modal-header">
                            <h4 class="modal-title">Create Publisher</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <input type="hidden" value="PUT" name="_method" v-if="editStatus">
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
                                <label>Adress</label>
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
                actionUrl: '{{ url('publishers') }}'
            },
            mounted: function() {

            },
            methods: {
                addData() {
                    this.data = {};
                    this.actionUrl = '{{ url('publishers') }}';
                    this.editStatus = false;
                    $('#modal-default').modal();
                },
                editData(data) {
                    this.data = data;
                    this.actionUrl = '{{ url('publishers') }}'+'/'+data.id;
                    this.editStatus = true;
                    $('#modal-default').modal();
                },
                deleteData(id) {
                    this.actionUrl = '{{ url('publishers') }}'+'/'+id;
                    if (confirm('Are You Sure?')) {
                        axios.post(this.actionUrl, {_method: 'DELETE'}).then(response => {
                            location.reload();
                        })
                    }
                }
            }
        });
    </script>
@endsection
