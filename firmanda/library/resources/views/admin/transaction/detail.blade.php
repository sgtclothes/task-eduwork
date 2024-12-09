@extends('layouts.admin')
@section('tittle', 'transactionPage')
@section('header')
    Detail Transaction
@endsection
@section('content')


    <!-- /.card-header -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Detail Transaction</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <form class="form-horizontal">
            <div class="card-body">
                <div class="form-group row">
                    <label for="member" class="col-sm-2 col-form-label">Member</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="member" placeholder="Member" disabled
                            value="{{ $transaction->member->name }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tanggalPeminjaman" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggalPeminjaman" placeholder="Tanggal Peminjaman"
                            disabled value="{{ $transaction->date_start }}">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="book" class="col-sm-2 col-form-label">Book</label>
                    <div class="col-sm-6">
                        <div class="form-group " >
                            {{-- {{$transaction->transactionDetails}} --}}
                            <select multiple class="form-control" disabled id="book-details">
                                @foreach ($transactions->transactionDetails as $key => $detail)
                                    {{-- <p>Book ID: {{ $detail->book_id }}</p> --}}
                                    <option value="">{{ $key + 1 }}. tittle: {{ $detail->book->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <a id="show-detail-btn" class="btn btn-primary">Show Detail</a>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        @if ($allBorrowed)
                            <input type="text" class="form-control" id="status" placeholder="Status" disabled
                                value="all book are borrowed">
                        @elseif($someBorrowed && !$allBorrowed)
                            <input type="text" class="form-control" id="status" placeholder="Status" disabled
                                value="some book are borrowed">
                        @else
                            <input type="text" class="form-control" id="status" placeholder="Status" disabled
                                value="all book are returned">
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-footer">

                <a href="{{ url('transactions') }}" class="btn btn-default float-right">Back</a>
            </div>
        </form>
    </div>

    <!-- /.card-body -->
    <!-- /.card-footer -->



@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#show-detail-btn').click(function(e) {
                e.preventDefault(); // Mencegah reload halaman jika tombol dalam <a> atau form

                const bookDetails = $('#book-details');
                const isDisabled = bookDetails.prop('disabled');

                if (isDisabled) {
                    // Aktifkan dropdown
                    bookDetails.prop('disabled', false);

                    // Inject elemen ke dalam select
                    bookDetails.empty(); // Kosongkan elemen select
                    @foreach ($transactions->transactionDetails as $key => $detail)
                        bookDetails.append(
                            '<option value="">{{ $key + 1 . '. tittle: ' . $detail->book->title }} =>  {{ 'Status: ' . $detail->status }}</option>');
                        
                    @endforeach

                    $(this).text("Hide Detail");
                } else {
                    // Nonaktifkan dropdown
                    bookDetails.prop('disabled', true);

                    // Kembalikan dropdown kosong (atau data awal)
                    bookDetails.empty(); // Kosongkan elemen select jika diinginkan
                    @foreach ($transactions->transactionDetails as $key => $detail)
                        bookDetails.append(
                            '<option value="">{{  $key + 1 .'. tittle: ' . $detail->book->title }}</option> ');
                        
                    @endforeach

                    $(this).text("Show Detail");
                }
            });
        });
    </script>
@endsection
