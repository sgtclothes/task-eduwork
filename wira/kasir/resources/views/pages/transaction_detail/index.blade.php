@extends('layouts.home')

@section('content')

 <div id="data-category">
      <div class="px-3 pt-4 pb-3">
        <h3 class="card-title">Transaction Detail table</h3>
    </div>
    
       
    <div class="card-body">

        <div class="table table-responsive">
            <table id="datatable" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Invoice</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
       
        </tbody>
       
        </table>
        </div>
    </div>

     <div class="modal fade" id="category-modal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
            <button
              type="button"
              class="close"
              data-bs-dismiss="modal"
              aria-label="Close"
            >
          <span aria-hidden="true">&times;</span>
        </button>
          </div>
          <div class="modal-body">
            <form :action="actionUrl" method="post" @submit="submitForm($event,data.id)">
              @csrf
              {{-- @method('PUT') --}}
              <input type="hidden" name="_method" value="PUT" v-if="editStatus">

            <div class="row g-2">
              <div class="col mb-0">
                <label for="invoice" class="form-label">Invoice</label>
                <input type="text" id="invoice" name="invoice" :value="data.invoice" class="form-control" placeholder="masukkan nama"  />
              </div>
            </div>

            <table class="table table-hover table-responsive">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Invoice</th>
                <th scope="col">Product</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
            </tbody>
          </table>
            <div class="save-btn ms-auto">
            <button type="submit" class="btn btn-primary save-btn-position">Save changes</button>
          </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  
 </div>
    

@endsection

@push('style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <style>
        .save-btn{
          position: relative; 
          margin-top:80px
        }
        .save-btn-position {
          position: absolute; right: 0;bottom:1px
        }
    </style>
@endpush

@push('script')
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

<script>

  var actionUrl = '{{ url('transaction-detail') }}'
  var apiUrl = '{{ url('api/transaction-detail') }}'
 

  var columns = [
    {data: 'DT_RowIndex', class:'text-center',orderable: true},
    {data: 'invoice', class:'text-center',orderable: true},
   
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
       
        editStatus : false,
      }
    },
    
    mounted : function() {
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
    
      editData(event,row) {
        this.data = this.datas[row]
        this.editStatus = true
        console.log(this.data)
        $('#category-modal').modal('show')
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
        
          $('#category-modal').modal('hide')
          _this.table.ajax.reload()
        })
      }
      }
  }).mount('#data-category')

</script>
@endpush