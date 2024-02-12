@extends('layouts.admin')

@section('tittle','authorPage')

@section('header')
author
@endsection

@section('css')

@endsection

@section('content')
<div id="controller">
  <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Author Data</h3>
                  <br>
                  <a href="#" class="btn btn-primary" @click="addData()">create</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">No</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone Number</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Action</th>
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
                        <td>
                          <a href="#" class="btn btn-warning" @click="editData({{$author}})">Edit</a>
                          <a href="#" class="btn btn-danger" @click="deleteData({{$author->id}})">delete</a>
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
                <div class="modal fade" id="modal-xl">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                      <form :action="actionUrl" method="post" autocomplete="off">

                        <div class="modal-header">
                          <h4 class="modal-title">Create new Author</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          @csrf
                          <input type="hidden" name="_method" value="PUT" v-if='editStatus'>
                          <div class="form-group">
                            <label >Name</label>
                            <input type="text" name="name" :value="data.name" required="" class="form-control">
                          </div>
                          <div class="form-group">
                            <label >Email</label>
                            <input type="text" name="email" :value="data.email" required="" class="form-control">
                          </div>
                          <div class="form-group">
                            <label >Phone Number</label>
                            <input type="text" name="phone_number" :value="data.phone_number" required="" class="form-control">
                          </div>
                          <div class="form-group">
                            <label >Address</label>
                            <input type="text" name="address" :value="data.address" required="" class="form-control">
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
</div>
@endsection

@section("js")
  <script type="text/javascript">
    var controller= new Vue({
      el: '#controller',
      
      data:{
        data : {},
        actionUrl: '{{url('authors')}}',
        editStatus:false,
      },
      mounted: function(){

      },
      methods:{
        addData(){
          this.data = {};
          this.actionUrl= '{{url('authors')}}';
          this.editStatus = false;
          $("#modal-xl").modal();
          
        },
        editData(data){
         
          this.data = data;
          this.actionUrl= '{{url('authors')}}'+'/'+data.id;
          this.editStatus = true;
          $("#modal-xl").modal();
        },
        deleteData(id){
          this.actionUrl= '{{url('authors')}}'+'/'+id;
          if(confirm("wanna delete this one?")){
            axios.post(this.actionUrl, {_method: 'DELETE'}).then(response =>{
              location.reload();
            })
          }
          console.log(id);
        },
      }
    });
  </script>
@endsection