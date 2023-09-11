@extends('layouts.template')

@section('title', 'Edit Transaction page')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4>Edit Peminjaman</h4>
  <form action="{{ route('transactions.update', $transactions->id) }}" method="POST">
    @csrf
    @method('PUT')
     <div class="card-body col-lg-6 col-md-4">
        <div class="my-3">
        <label for="member_id" class="form-label">Name</label>
        <select name="member_id" id="" class="form-control" >
          <option value="{{$transactions->member_id}}">
              Jangan Ubah ({{$transactions->member->name}})
          </option>
          @foreach ($members as $member)
            <option value="{{ $member->id }}">{{ $member->name }}</option>
          @endforeach
        </select>
          
       
        </div>
        <div class="my-3">
        <label for="book_id" class="form-label">book</label>
        <select name="book_id[]" 
        multiple="multiple" id="" class="select2-multiple form-control" 
        id="select2Multiple"
        >
         @foreach ($transactions->details as $item)
             
         <option value="{{$item->book->id}}" selected="selected">
           Jangan Ubah ({{$item->book->title}})
         </option>
         
         @endforeach
       
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
            value="{{ old('date_start', $transactions->date_start) }}"
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
            value="{{ old('date_end', $transactions->date_end) }}"
        />
        </div>
        
        <div class="col-lg-6 mt-3">
         
         <div class="form-check">
           {{-- <input class="form-check-input" type="radio" name="status" id="status" value="{{ old('status', $status) }}">
           <label class="form-check-label" for="status">
             Sudah dikembalikan
           </label> --}}
            <input type=radio name="status" value="1" {{ $transactions->status == '1' ? 'checked' : ''}}>Belum dikembalikan<br>
            <input type=radio name="status" value="2" {{ $transactions->status == '2' ? 'checked' : ''}}>Sudah dikembalikan<br>       
         </div>
        </div>
       
        </div>

       <div class="d-grid">
          <button type="submit" name="submit" class="btn btn-primary mt-4">Edit</button>
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