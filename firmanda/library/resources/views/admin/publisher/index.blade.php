@extends('layouts.admin')
@section('tittle','publisherPage')

@section('header')
publisher
@endsection

@section('css')
@endsection

@section('content')
<div id="controller">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Publisher Data</h3>
      <br>
      <a href="#"  class="btn btn-primary" @click="addData()">create new publisher</a>
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
            @foreach ($publishers as $key=>$publisher)
          <tr>
            <td>
                {{$key+1}}
            </td>
            <td>
                {{$publisher->name}}
            </td>
            <td>
              {{$publisher->email}}
            </td>
            <td>
                {{$publisher->phone_number}}
            </td>
            <td>
                {{$publisher->address}}
            </td>
            <td>
                {{$publisher->created_at->format('d M Y')}}
            </td>
            <td>
                <a href="#" class="btn btn-warning" @click="editData({{$publisher}})">Edit</a>
                <a href="#" class="btn btn-danger" @click="deleteData({{$publisher->id}})">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="modal fade" id="modal-xl">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <form :action="actionUrl" method="post">
            @csrf
            <input type="hidden" name="_method" value="PUT" v-if="editStatus">
            <div class="modal-header">
              <h4 class="modal-title">Extra Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label >Name</label>
                <input type="text" name="name" required='' class="form-control" :value="data.name">
              </div>
              <div class="form-group">
                <label >Email</label>
                <input type="text" name="email" required='' class="form-control" :value="data.email">
              </div>
              <div class="form-group">
                <label >Phone Number</label>
                <input type="text" name="phone_number" required='' class="form-control" :value="data.phone_number">
              </div>
              <div class="form-group">
                <label >Address</label>
                <input type="text" name="address" required='' class="form-control" :value="data.address">
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
</div>
@endsection

@section('js')
<script>
  var controller = new Vue ({
    el: '#controller',
    data: {
      data:{},
      actionUrl:'{{url('publishers')}}',
      editStatus: false,
    },
    mounted: function(){

    },
    methods:{
      addData(){
        // console.log('add data');
        this.data = {};
        this.actionUrl = '{{url('publishers')}}';
        this.editStatus = false;
        $("#modal-xl").modal();
        
      },
      editData(data){
        console.log('edit data');
        this.data = data;
        this.actionUrl = '{{url('publishers')}}'+'/'+data.id;
        this.editStatus = true;
        $("#modal-xl").modal();
        
      },
      deleteData(id){
        this.actionUrl='{{url('publishers')}}'+'/'+id;
        if(confirm('do you want to delete this data? just for sure')){
          axios.post(this.actionUrl,{_method: 'DELETE'}).then(response =>{
            location.reload();
          })
        }
      },
    }
  });
</script>

@endsection