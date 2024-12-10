@extends('layouts.admin')
@section('tittle', 'transactionPage')
@section('header')
    transaction
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Catalog Data</h3>
            <br>
            <a href="{{ url('transactions/create') }}" class="btn btn-sm btn-primary pull-right"> create new catalog</a>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 300px;">
                    <select class="custom-select form-control-border" id="statusFilter" style="width: 55%;">
                        <option value="allBook" {{ request('status') == 'all' ? 'selected' : '' }}> all book </option>
                        <option value="returnedAll" {{ request('status') == 'returnedAll' ? 'selected' : '' }}> all
                            book are returned </option>
                        <option value="borrowed" {{ request('status') == 'borrowed' ? 'selected' : '' }}> some
                            book are borrowed </option>
                        <option value="borrowedAll" {{ request('status') == 'borrowedAll' ? 'selected' : '' }}> all
                            book are borrowed </option>
                    </select>
                    <select class="custom-select form-control-border" id="yearFilter"style="width: 40%;">
                        @foreach ($years as $year)
                            <option value="{{ $year }}" {{ request('year') == $year ? 'selected' : '' }}>
                                {{ $year }}</option>
                        @endforeach
                    </select>
                </div>

            </div>

        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th class="text-center">Member ID</th>
                    <th class="text-center">Tanggal Pinjam</th>
                    <th class="text-center">Tanggal Harus Dikembalikan</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $key => $transaction)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $transaction->member->name }}</td>
                        <td class="text-center">
                            {{ $transaction->date_start }}
                        </td>
                        <td class="text-center">

                            {{ date_convert($transaction->date_end) }}
                        </td>
                        <td>
                            @php
                                $allBorrowed = $transaction->transactionDetails->every(function ($detail) {
                                    return $detail->status === 'borrowed';
                                });
                                $someBorrowed = $transaction->transactionDetails->contains(function ($detail) {
                                    return $detail->status === 'borrowed';
                                });
                                $allReturned = $transaction->transactionDetails->every(function ($detail) {
                                    return $detail->status === 'returned';
                                });
                            @endphp

                            @if ($allBorrowed)
                                all book are borrowed
                            @elseif($someBorrowed && !$allBorrowed)
                                some book are borrowed
                            @else
                                all book are returned
                            @endif

                        </td>
                        <td>
                            <a href="{{ url('transactions/' . $transaction->id . '/return') }}"
                                class="btn btn-warning">Return</a>
                            <a href="{{ url('transactions/' . $transaction->id . '/detail') }}"
                                class="btn btn-primary">detail</a>
                            <a href="#" class="btn btn-danger">hapus</a>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
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
@endsection

@section('js')
    <script>
        $(document).ready(function() {
           
            function updateFilter(){
                let status = $('#statusFilter').val();
                let year = $('#yearFilter').val();
                console.log(status);
                // console.log(year);
                let url = "{{ url('transactions') }}";

                let html = [];
                if(status){
                    html.push(`status=${status}`);
                }

                if(year){
                    html.push(`year=${year}`);
                }
                if(html.length > 0){
                    url = url + '?' + html.join('&');
                    console.log(url);
                }
                window.location.href = url;

            };
            $('#statusFilter').change(function() {
                updateFilter();
            });
            $('#yearFilter').change(function() {
                updateFilter();
            });
        });
    </script>
@endsection
