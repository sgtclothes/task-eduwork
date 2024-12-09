@extends('layouts.admin')
@section('tittle', 'transactionPage')
@section('header')
    transaction
@endsection
@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Quick Example</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ url('transactions/' . $transaction->id) }}" method="POST">
            @csrf
            {{ method_field('PUT') }}
            {{-- <input type="text" value="{{ $transaction->id }}"> --}}
            <div class="card-body">
                <div class="form-group">
                    <label for="member">Members Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" disabled
                        value="{{ $transaction->member->name }}">
                </div>

                <div class="form-group">
                    <label for="date">date</label>
                    <input type="text" class="form-control" id="date" name="date_end" placeholder="Enter name"
                        readonly value="{{ now()->format('Y-m-d H:i:s') }}">
                </div>

                <div class="form-group">
                    <label>Book</label>
                    <select class="form-control" name="book_id" id="book_id">
                        @foreach ($books->transactionDetails as $key => $book)
                            <option value="{{ $book->book->id }}|{{ $book->id }}">{{ $key + 1 }}.
                                {{ $book->book->title }}</option>
                            {{-- <input type="hidden" name="transactionDetailsId" value="{{ $books->transactionDetails[$key]->id }}"> --}}
                        @endforeach
                    </select>
                </div>
                <div class="form-group" id="status">
                    {{-- {{$transactionDetails}} --}}
                    <label for="member">Status </label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="borrowed"checked>
                        <label class="form-check-label">Borrowed</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="returned">
                        <label class="form-check-label">Returned</label>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer" id="button">
                <button type="submit" class="btn btn-primary">Submit</button>

            </div>
        </form>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            const transactionDetails = @json($transactionDetails);

            selected = $('#book_id').val();
                [bookId, transactionDetailsId] = selected.split('|').map(Number);
                console.log(transactionDetailsId);

                console.log(bookId);
                const selectedDetail = transactionDetails.find(
                    detail => detail.id === transactionDetailsId
                );
                console.log(selectedDetail);
                if (selectedDetail && selectedDetail.status === 'returned') {
                    const html = `
            <label for="member">Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="returned" checked disabled>
                <label class="form-check-label">Returned</label>
            </div>`;
                    $('#status').html(html);
                    const button_status = `<a class="btn btn-primary" href="{{ url('transactions') }}">back</a>`;
                    $('#button').html(button_status);
                } 

            $('#book_id').on('change', function() {
                selected = $('#book_id').val();
                [bookId, transactionDetailsId] = selected.split('|').map(Number);
                console.log(transactionDetailsId);

                console.log(bookId);
                const selectedDetail = transactionDetails.find(
                    detail => detail.id === transactionDetailsId
                );
                console.log(selectedDetail);
                if (selectedDetail && selectedDetail.status === 'returned') {
                    const html = `
            <label for="member">Status</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="returned" checked disabled>
                <label class="form-check-label">Returned</label>
            </div>`;
                    $('#status').html(html);
                    const button_status = `<a class="btn btn-primary" href="{{ url('transactions') }}">back</a>`;
                    $('#button').html(button_status);
                } else {
                    const html = `
            <label for="member">Status </label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="borrowed"checked>
                        <label class="form-check-label">Borrowed</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" value="returned">
                        <label class="form-check-label">Returned</label>
                    </div>`;
                    $('#status').html(html);
                    const button_status = ` <button type="submit" class="btn btn-primary">Submit</button>`;
                    $('#button').html(button_status);
                }
            });


        });
    </script>
@endsection
