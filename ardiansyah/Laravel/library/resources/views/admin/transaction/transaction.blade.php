@extends('layouts.admin')
@section('header', 'Transaction')

@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')
<div id="controller">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="#" @click="addData()" class="btn btn-sm btn-primary pull-right">Create New Transaction</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">No.</th>
                                <th class="text-center">Member Id</th>
                                <th class="text-center">Date Start</th>
                                <th class="text-center">Date End</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <form :action="actionUrl" method="POST" autocomplete="off" @submit="submitForm($event, data.id)">
                    <div class="modal-header">
                        <h4 class="modal-title">Transaction</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf

                        {{-- untuk edit --}}
                        <input type="hidden" name="_method" value="PUT" v-if="editStatus">

                        <div class="form-group">
                            <label>Member Id</label>
                            <select name="member_id" class="form-control">
                                <option value="">Select member</option>
                                @foreach ($transaction_data as $transaction)
                                <option :selected="data.member_id == {{ $transaction->member_id }}" value="{{ $transaction->member_id }}">{{ $transaction->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Date Start</label>
                            <input type="number" class="form-control" name="year" required="" :value="data.year">
                        </div>
                        <div class="form-group">
                            <label>Date End</label>
                            <input type="number" class="form-control" name="year" required="" :value="data.year">
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
<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script type="text/javascript">
    var actionUrl = '{{ url('transactions') }}';
    var apiUrl = '{{ url('api/transactions') }}';

    var columns = [
        { data: 'DT_RowIndex', class: 'text-center', orderable: true },
        { data: 'member_id', class: 'text-center', orderable: true },
        { data: 'date_start', class: 'text-center', orderable: true },
        { data: 'date_end', class: 'text-center', orderable: true },
        {
            render: function (index, row, data, meta) {
                return `
                <a href="#" class="btn btn-sm btn-warning" onclick="controller.editData(event,${meta.row})">Edit</a>
                <a href="#" class="btn btn-sm btn-danger" onclick="controller.deleteData(event,${data.id})">Delete</a>
            `;
            }, orderable: false, width: '200px', class: 'text-center'
        },
    ];
</script>
<script src="{{ asset('js/data.js') }}"></script>
@endsection
