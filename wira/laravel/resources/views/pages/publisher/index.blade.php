@extends('layouts.template')

@section('content')
 <div id="control-data">
   <div class="container-xxl flex-grow-1 container-p-y">
  
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <h4>Publisher Table</h4>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>

                  <div class="col-lg-4 col-md-6">
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                      <a href="#">
                        <button
                        @click="addData()"
                         type="button"
                          class="btn btn-primary mx-3"
                          data-bs-toggle="modal"
                          data-bs-target="#publisher-modal">
                          Add Publisher
                        </button>
                        </a>
                      </div>
                    </div>
                  {{-- <a href="{{ route('publisher.create') }}">
                    <button class="btn btn-primary ms-3 my-2">Create New Publisher</button>
                  </a> --}}
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Book</th>
                        <th>Created At</th>
                        <th>Actions</th>
                       
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">

                    @foreach ($publishers as $publisher)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $publisher->name }}</td>
                        <td>{{ $publisher->email }}</td>
                        <td>{{ $publisher->phone_number }}</td>
                        <td>{{ $publisher->address }}</td>
                        <td>{{ count($publisher->book_publisher) }}</td>
                        <td>{{ date('d-m-Y' ,strtotime($publisher->created_at)) }}</td>
                        <td>
                            <a href="#" @click="editData({{ $publisher }})" class="btn btn-primary">edit</a>
                          <a href="#" @click="deleteData({{ $publisher->id }})" class="btn btn-danger">hapus</a>
                        </td>
                      </tr>
                    @endforeach
                    
                    </tbody>
                  </table>
                </div>
              </div>
              <hr class="my-5" />
              <!-- Modal -->
    <div class="modal fade" id="publisher-modal" tabindex="-1" aria-hidden="true">
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
            <form :action="actionUrl" method="post">
              @csrf
            
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
@endpush

@push('script')
  <script type="text/javascript">

  const { createApp } = Vue

  createApp({
    data() {
      return {
        data: {},
        actionUrl : '{{ url('publishers') }}',
        editStatus : false
      }
    },
    methods: {
      addData() {
        this.data = ""
        this.actionUrl = '{{ url('publishers') }}'
       $('#publisher-modal').modal('show')
      },
      editData(data) {
        this.data = data
        this.actionUrl = '{{ url('publishers') }}' + '/' + data.id
        this.editStatus = true
        $('#publisher-modal').modal('show')
      },
      deleteData(id) {
       this.actionUrl = '{{ url('publishers') }}' + '/' + id
       if(confirm("Are you sure ?")) {
        axios.post(this.actionUrl, {_method: "DELETE"}).then((response) => {
          window.location.reload()
        })
       }
      }
    },
  }).mount('#control-data')
  </script>
@endpush

