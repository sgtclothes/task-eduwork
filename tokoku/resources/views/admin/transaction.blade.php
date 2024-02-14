@extends('layouts.main')
@section('header', 'Transactions')

@section('css')
@endsection

@section('content')
    <div id="app">
        <div class="row">
            <div class="col-lg">
                <a href="#" class="btn btn-primary mb-2">Create new transaction</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="table-datatable">
                        <thead>
                            <tr>
                                <th width="1%" rowspan="2">NO</th>
                                <th width="10%" rowspan="2" class="text-center">TANGGAL</th>
                                <th rowspan="2" class="text-center">KATEGORI</th>
                                <th rowspan="2" class="text-center">KETERANGAN</th>
                                <th colspan="2" class="text-center">JENIS</th>
                                <th rowspan="2" width="10%" class="text-center">OPSI</th>
                            </tr>
                            <tr>
                                <th class="text-center">PEMASUKAN</th>
                                <th class="text-center">PENGELUARAN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
