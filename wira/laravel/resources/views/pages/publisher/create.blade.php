@extends('layouts.template')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <form action="{{ route('publisher.store') }}" method="POST">
    @csrf
     <div class="card-body col-lg-6 col-md-4">
        <div class="my-3">
        <label for="name" class="form-label">Name</label>
        <input
            type="text"
            class="form-control"
            id="name"
            placeholder="ketikkan nama publisher"
            name="name"
            required
        />
       
        </div>
        <div class="my-3">
        <label for="email" class="form-label">email</label>
        <input
            type="text"
            class="form-control"
            id="email"
            placeholder="ketikkan email publisher"
            name="email"
            required
        />
       
        </div>

        <div class="my-3">
        <label for="phone_number" class="form-label">phone number</label>
        <input
            type="text"
            class="form-control"
            id="phone_number"
            placeholder="ketikkan nomor hp publisher"
            name="phone_number"
        />
       
        </div>

        <div class="my-3">
        <label for="address" class="form-label">address</label>
        <input
            type="text"
            class="form-control"
            id="address"
            placeholder="ketikkan alamat publisher"
            name="address"
        />
        </div>

       <div class="d-grid">
          <button type="submit" name="submit" class="btn btn-primary mt-4">Create</button>
       </div>
    </div>
  </form>
</div>
@endsection