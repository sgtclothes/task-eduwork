@extends('layouts.home')

@section('content')

 <div id="data-category">
      <div class="px-3 pt-4 pb-3">
        <h3 class="card-title">Product table</h3>
    </div>
    
        <div class="mx-3 mb-3 mt-4">
            <!-- Default Modal -->
                <!-- Button trigger modal -->
                <a href="#">
                <button
                @click="addData()"
                    type="button"
                    class="btn btn-primary"
                    data-bs-toggle="modal"
                    data-bs-target="#author-modal">
                    Add product
                </button>
                </a>
        </div>
    <div class="card-body">

        <div class="table table-responsive">
            <table id="datatable" class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Product_sn</th>
                <th>Category</th>
                <th>Unit</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Total</th>
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
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" :value="data.name" class="form-control" placeholder="masukkan nama"  />
              </div>
            </div>
         
            <div class="row g-2">
              <div class="col mb-0">
                <label for="product_sn" class="form-label">product_sn</label>
                <input type="text" id="product_sn" name="product_sn" :value="data.product_sn"  class="form-control" placeholder="masukkan nama"  />
              </div>
            </div>

            <div class="row g-2">
              <div class="col mb-0">
                <label for="category" class="form-label">category</label>
                 <select  name="category_id" id="" class="form-control">
                
                  @foreach ($category as $cat)
                    <option :selected="data.category_id == {{ $cat->id }}" value="{{ $cat->id }}">{{ $cat->name }}</option>
                 @endforeach
                 {{-- :selected="book.publisher_id == {{ $publisher->id}}" --}}
                </select>
              </div>
            </div>

            <div class="row g-2">
              <div class="col mb-0">
                <label for="unit" class="form-label">unit</label>
                <input type="text" id="unit" name="unit" :value="data.unit" class="form-control" placeholder="masukkan nama"  />
              </div>
            </div>

            <div class="row g-2">
              <div class="col mb-0">
                <label for="price" class="form-label">price</label>
                <input type="text" id="price" name="price" :value="data.price" class="form-control" placeholder="masukkan nama"  />
              </div>
            </div>

            <div class="row g-2">
              <div class="col mb-0">
                <label for="qty" class="form-label">qty</label>
                <input type="text" id="qty" name="qty" :value="data.qty" class="form-control" placeholder="masukkan nama"  />
              </div>
            </div>
         
            <div class="row g-2">
              <div class="col mb-0">
                <label for="total" class="form-label">total</label>
                <input type="text" id="total" name="total" :value="data.total" class="form-control" placeholder="masukkan nama"  />
              </div>
            </div>
         
        
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

  var actionUrl = '{{ url('product') }}'
  var apiUrl = '{{ url('api/product') }}'
  var apiCategroy = '{{ url('api/category') }}'

  var columns = [
    {data: 'DT_RowIndex', class:'text-center',orderable: true},
    {data: 'name', class:'text-center',orderable: true},
    {data: 'product_sn', class:'text-center',orderable: true},
    {data: 'category.name', class:'text-center',orderable: true},
    {data: 'unit', class:'text-center',orderable: true},
    {data: 'price', class:'text-center',orderable: true},
    {data: 'qty', class:'text-center',orderable: true},
    {data: 'total', class:'text-center',orderable: true},
  
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
        apiCategroy,
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
    
     addData() {
        this.data = ""
        this.editStatus = false
        
       $('#category-modal').modal('show')
      },
      editData(event,row) {
        this.data = this.datas[row]
        this.editStatus = true
       
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