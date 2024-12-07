@extends('layouts.admin')
@section('tittle', 'transactionDetailPage')
@section('header')
    transaction detail
@endsection
@section('css')
    <!-- DataTables -->
    {{-- dataTable1 --}}

    <link rel="stylesheet" href={{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}>
@endsection
@section('content')
    <div id="controller">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Publisher Data</h3>
                <br>
                <a href="#" class="btn btn-primary" @click="addData()">create new publisher</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body  overflow-auto">
                <table id="datatable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th class="text-center">transactionId</th>
                            <th class="text-center">bookId</th>
                            <th class="text-center">qty</th>
                            <th class="text-center">Created At</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>

                </table>
            </div>
            <div class="modal fade" id="modal-xl">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <form :action="actionUrl" method="post" autocomplete="off" @submit="submitForm($event,data.id)">
                            @csrf
                            <input type="hidden" name="_method" value="PUT" v-if="editStatus">
                            <div class="modal-header">
                                <h4 class="modal-title">Extra Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                

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
@section('js')
    <!-- DataTables  & Plugins -->
    <script src={{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}></script>
    <script src={{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}></script>
    <script src={{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}></script>
    <script src={{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}></script>
    <script src={{ asset('assets/plugins/jszip/jszip.min.js') }}></script>
    <script src={{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}></script>
    <script src={{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}></script>
    <script src={{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}></script>
    <script src={{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}></script>
    <script src={{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}></script>

    <script type="text/javascript">
        var actionUrl = "{{ url('transactionDetails') }}";
        var apiURl = "{{ url('api/transactionDetails') }}";
        var columns = [{
            data: 'DT_RowIndex',
                class: 'text-center',
                orderable: true 
        },
        {
            data: 'transaction_id',
            class: 'text-center',
            orderable: true
        },
        {
            data: 'book_id',
            class: 'text-center',
            orderable: true
        },
        {
            data: 'qty',
            class: 'text-center',
            orderable: true
        },
        {
            data: 'date',
            class: 'text-center',
            orderable: true
        },
        {
                render: function(index, row, data, meta) {
                    //  masih error gak tau tar di cari
                    return `<a href="#" class="btn btn-warning" onclick="controller.editData(event,${meta.row})">Edit</a>
              <a href="#" class="btn btn-danger" onclick="controller.deleteData(event,${data.id})">Delete</a>`;
                },
                orderable: false,
                width: '200px',
                class: 'text-center'
            },
    ];
    </script>
    <script src="{{asset('js/data.js')}}"></script>
@endsection
