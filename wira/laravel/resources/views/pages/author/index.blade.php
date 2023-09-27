@extends('layouts.template')

@section('title', 'catalog page')

@section('content')
  <div id="controlData">
    <div class="container-xxl flex-grow-1 container-p-y">
  
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <h4>Author Table</h4>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="mx-3 mb-3">
                  <!-- Default Modal -->
                    <div class="col-lg-4 col-md-6">
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                      <a href="#">
                        <button
                        @click="addData()"
                         type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#author-modal">
                          Add author
                        </button>
                        </a>
                        
                       
                      </div>
                    </div>
                </div>
                <div class="table table-responsive">
                  <table class="table" id="datatable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Actions</th>
                       
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                   
                    
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

              <hr class="my-5" />

            
              <!-- Modal -->
  <div class="modal fade" id="author-modal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form :action="actionUrl" method="post" @submit="submitForm($event,data.id)">
              @csrf
              {{-- @method('PUT') --}}
              <input type="hidden" name="_method" value="PUT" v-if="editStatus">

            <div class="row g-2">
              <div class="col mb-0">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" :value="data.name" class="form-control" placeholder="masukkan nama"  />
              </div>

              <div class="col mb-0">
                <label for="name" class="form-label">email</label>
                <input type="email" id="email" name="email" :value="data.email" class="form-control" placeholder="xxxx@xxx.xx"/>
              </div>
             
            </div>
            <div class="row">
              <div class="col">
                <label for="phone_number" class="form-label">phone_number</label>
                <input type="text" id="phone_number" name="phone_number" :value="data.phone_number" class="form-control" placeholder="masukkan nomor hp" />
              </div>
             
            </div>

            <div class="row">
              <div class="col">
                <label for="address" class="form-label">Address</label>
                <input type="text" id="address" name="address" :value="data.address" class="form-control" placeholder="masukkan alamat" />
              </div>
             
            </div>
          <div class="save-btn">
            <button type="submit" class="btn btn-primary save-btn-position">Save changes</button>
          </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  

@endsection

@push('styles')
<style>
    .save-btn{
    position: relative; 
    margin-top:80px
  }
  .save-btn-position {
    position: absolute; right: 0;bottom:1px
  }
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
@endpush

@push('script')
 <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script>
       $(document).ready( function () {
            $('#table_id').DataTable({
                "columnDefs": [
                { "width": "25%", "targets": 0 },
                { "width": "50%", "targets": 1 },
                { "width": "50%", "targets": 2 },
                { "width": "25%", "targets": 3 }
            ]
            });
        });
    </script>
    

<script>

  var actionUrl = '{{ url('authors') }}'
  var apiUrl = '{{ url('api/authors') }}'

  var columns = [
    {data: 'DT_RowIndex', class:'text-center',orderable: true},
    {data: 'name', class:'text-center',orderable: true},
    {data: 'email', class:'text-center',orderable: true},
    {data: 'phone_number', class:'text-center',orderable: true},
    {data: 'address', class:'text-center',orderable: true},
    {data: 'date', class:'text-center',orderable: true},
    {render: function (data, type, row, meta) {
        return type === 'display'
            ? 
            ` <a href="#" class="btn btn-warning btn-sm" onclick="App.editData(event, ${meta.row})">Edit</a>
              <a href="#" class="btn btn-danger btn-sm" onclick="App.deleteData(event, ${row.id})">hapus</a>
            `
            : data;
    },orderable: true, width: '200px', class:'text-center', data: null}
   
  ]

  const { createApp } = Vue
      
  var App = createApp({
    data() {
      return {
        datas: [],
        data: {},
        anggota: {},        
        actionUrl,
        apiUrl,
        editStatus : false
      }
    },
    mounted: function() {
      this.datatable()
    },
    methods : {
      datatable() {
        const _this = this;
        _this.table = $(`#datatable`).DataTable({
          ajax: {
            url: _this.apiUrl,
            type: 'GET'
          },
          columns
        }).on('xhr', function(){
          _this.datas = _this.table.ajax.json().data
        })
      },
    
     addData() {
        this.data = ""
        this.editStatus = false
       $('#author-modal').modal('show')
      },
      editData(event,row) {
        this.data = this.datas[row]
        this.editStatus = true
        $('#author-modal').modal('show')
      },
      deleteData(event,id) {
       if(confirm("Are you sure ?")) {
        $(event.target).parents('tr').remove()
        axios.post(this.actionUrl+'/'+id, {_method: 'DELETE'}).then(response => {
          alert("data has been removed")
        })
       }
      },
      submitForm(event,id) {
        event.preventDefault();
        const _this = this
        var actionUrl = !this.editStatus ? this.actionUrl : this.actionUrl+'/'+id
        axios.post(actionUrl, new FormData($(event.target)[0])).then(response => {
          $('#author-modal').modal('hide')
          _this.table.ajax.reload()
        })
      }
      }
  }).mount('#controlData')

</script>    

@endpush