@extends('layouts.template')

@section('title', 'Transaction page')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <form action="{{ route('transactions.store') }}" method="POST">
    @csrf
     <div class="card-body col-lg-6 col-md-4">
        <div class="my-3">
        <label for="member_id" class="form-label">Name</label>
        <select name="member_id" id="" class="form-control" >
          @foreach ($members as $member)
            <option value="{{ $member->id }}">{{ $member->name }}</option>
          @endforeach
        </select>
          
       
        </div>
        <div class="my-3">
        <label for="book_id" class="form-label">book</label>
        <select name="book_id[]" multiple="multiple" id="" class="select2-multiple form-control" id="select2Multiple">
          @foreach ($books as $book)
            <option value="{{ $book->id }}">{{ $book->title }}</option>
          @endforeach
        </select>
       
        </div>

        <div class="my-3 row">
        <div class="col-lg-6">
          <label for="date_start" class="form-label">Tanggal pinjam</label>
          <input
            type="date"
            class="form-control"
            id="date_start"
            placeholder="ketikkan nomor hp publisher"
            name="date_start"
        />
        </div>
        <div class="col-lg-6">
          <label for="date_end" class="form-label">Tanggal kembali</label>
          <input
            type="date"
            class="form-control"
            id="date_end"
            placeholder="ketikkan nomor hp publisher"
            name="date_end"
        />
        </div>
       
        </div>

       <div class="d-grid">
          <button type="submit" name="submit" class="btn btn-primary mt-4">Create</button>
       </div>
    </div>
  </form>
</div>
@endsection

@push('styles')
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
@push('script')
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script>
        $(document).ready(function() {
            // Select2 Multiple
            $('.select2-multiple').select2({
                placeholder: "Select",
                allowClear: true
            });

        });

    </script>
@endpush