@extends('layouts.admin')
@section('header', 'Author')

@section('css')

 <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

  @endsection

@section('content')

<div id='controller'>

Ini adalah halaman author <br><br>

<div class="card">
<div class="card-header">

<a href="#" class="btn btn-sm btn-primary pull right" @click="addData()" >Create New Author</a>
</div>

<div class="card-body">
 <table id="tabledata" class="table-bordered table-striped">
     <thead>
     <tr>
     <th style="width: 10px">No</th>
     <th class='text-center' >Name</th>
     <th class='text-center' >Phone Number</th>
     <th class='text-center'>Address</th>
     <th class='text-center'>Email</th>
     <th class='text-center'>Create At</th>
     <th class='text-center'>Action</th>
     </tr>
     </thead>
     <tbody>
        @foreach( $authors as $key => $author)
          <tr>
             <td class='text-center'>{{$key+1}}</td>
             <td>{{$author->name}}</td>
             <td class='text-center'> {{ $author -> phone_number}} </td>
             <td class='text-center'> {{ $author -> addres}} </td>
             <td class='text-center'> {{ $author -> email}} </td>
             <td class='text-center'> {{ date('H:i:s - d M Y', strtotime($author->created_at))}} </div>
             <td class='text-center'> 
                <a href="#" @click="editData({{ $author }})" class="btn btn-warning btn-sm">Edit</a>
                <a href="#" @click="deleteData({{ $author->id }})" class="btn btn-danger btn-sm">Delete</a>
            </td>
             </div>
             </td>
         </tr>
        @endforeach
     </tbody>
 </table>
</div>

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <form method="post" :action="actionUrl"  autocomplete="off">
            <div class="modal-header">
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                @csrf

                <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Author Name" :value="data.name" required="">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter Email" :value="data.email" required="">
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" name="phone_number" placeholder="Enter Phone Number" :value="data.phone_number" required="">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="addres" placeholder="Enter Address" :value="data.addres" required="">
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

<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script type="text/javascript">
  $(function () {
    $("#tabledata").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabledata_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
</script>


 <script type="text/javascript">
    var controller = new Vue({
        el: '#controller',
        data: {

            data : {},
            actionUrl : '{{ url('authors') }}', 
            editStatus : false
        }, 
        mounted: function () {
            
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
                if (confirm("Are You Sure?")) {
                    axios.post(this.actionUrl, {_method: 'DELETE'}).then(response => {
                        location.reload();
                    }); 
                }


            }
        }
    });
 </script>
@endsection