@extends('layouts.template')

@section('title', 'Transaction page')

@section('content')
  <div id="controlData">
    <div class="container-xxl flex-grow-1 container-p-y">
  
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

              <h4>Publisher Table</h4>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="mx-3 mb-3">
                  <!-- Default Modal -->
                    <div class="col-lg-4 col-md-6">
                      <div class="mt-3">
                        <!-- Button trigger modal -->
                      <a href="{{ route('transactions.create') }}">
                        <button

                         type="button"
                          class="btn btn-primary"
                         >
                          Add Transaction
                        </button>
                        </a>
                      </div>
                    </div>
                </div>
                <div class="container">
                  <table class="table table-responsive yajra-datatable"  id="datatable">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Nama Peminjam</th>
                        <th>Lama Pinjam(hari)</th>
                        <th>Total Buku</th>
                        <th>Total Bayar</th>
                        <th>Status</th>
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

  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('transaction.get') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'date_start', name: 'date_start'},
            {data: 'date_end', name: 'date_end'},
            {data: 'member.name', name: 'member.name'},
            {data: 'days', name: 'days'},
            {data: 'details[].qty', name: 'details[].qty'},
            {data: 'details[].book.price', name: 'details[].book.price'},
            {data: 'status_tr', name: 'status_tr'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });

</script>    

@endpush