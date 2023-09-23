@extends('layouts.admin')
@section('header', 'Author')

@section('css')

@endsection

@section('content')
<div id="controller" class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                <!-- <h3 class="card-title">Bordered Table</h3> -->
                <a href="#" @click="addData()" class="btn btn-primary pull-right">Create New Author</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th >No</th>
                                <th >Name</th>
                                <th >Email</th>
                                <th >Phone Number</th>
                                <th >Address</th>
                                <th >Total Books</th>
                                <th >Created At</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($authors as $key => $author)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$author['name']}}</td>
                                <td>{{$author['email']}}</td>
                                <td>{{$author['phone_number']}}</td>
                                <td>{{$author['address']}}</td>
                                <td class="text-center">{{COUNT($author['books'])}}</td>
                                <td>{{ date("F j, Y, g:i a", strtotime($author['created_at'])) }}</td>
                                <td>
                                    <a class="btn btn-warning" @click="editData({{ $author }})" href="#">Edit</a>
                                    <a class="btn btn-danger" @click="deleteData({{ $author->id }})" href="#">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>

            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>  
    </div>

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form :action="actionUrl" method="post" autocomplete="off">
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
                                <input name="name" :value="data.name" type="text" required="" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input :value="data.email" name="email" type="email" required="" class="form-control" placeholder="Enter Email">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input :value="data.phone_number" name="phone_number" type="text" required="" class="form-control" placeholder="Enter Phone Number">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input :value="data.address" name="address" type="text" required="" class="form-control" placeholder="Enter Address">
                            </div>
                            
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
            </div>
        </div>
</div>
@endsection

@section('js')
    <script type="text/javascript">
        var controller = new Vue({
            el: '#controller',
            data: {
                data: {},
                actionUrl : '{{ url('authors') }}',
                editStatus : false
            },
            mounted: function (){

            },
            methods: {
                addData() {
                    this.data = {};
                    this.actionUrl = '{{ url('authors') }}';
                    this.editStatus = false
                    $('#modal-default').modal();
                    // console.log('add data');
                },
                editData(data) {
                    // console.log(data)
                    this.data = data;
                    this.actionUrl = '{{ url('authors') }}'+'/'+data.id;
                    this.editStatus = true
                    $('#modal-default').modal();
                },
                deleteData(id) {
                    // console.log(id)
                    this.actionUrl = '{{ url('authors') }}'+'/'+id;
                    if (confirm("Are You Sure ?")) {
                        axios.post(this.actionUrl, {_method: 'DELETE'}).then(response => {
                            location.reload();
                        });
                    }
                },
            }
        });
    </script>

    <!-- <script>
        import { createApp } from 'vue';

        const app = createApp({
            data() {
                return {
                    data: {},
                    actionUrl: '{{ url('authors') }}'
                };
            },
            methods: {
                addData() {
                    $('#modal-default').modal();
                    // console.log('add data');
                },
                editData() {

                },
                deleteData() {

                },
            }
        });

        app.mount('#controller');

    </script> -->
@endsection