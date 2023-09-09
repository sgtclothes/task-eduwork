@extends('layouts.template')

@section('title', 'publisher page')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <form action="{{ route('publisher.update', $publishers->id) }}" method="POST">

    @csrf
    @method('PUT')
    
     <div class="card-body col-lg-4 col-md-3">
        <div class="my-2">
        <label for="defaultFormControlInput" class="form-label">Name</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="ketikkan nama katalog"
            aria-describedby="defaultFormControlHelp"
            name="name"
            value="{{ old('name', $publishers->name) }}"
        />
       
        </div>

        <div class="my-2">
        <label for="defaultFormControlInput" class="form-label">Email</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="ketikkan nama katalog"
            aria-describedby="defaultFormControlHelp"
            email="email"
            value="{{ old('email', $publishers->email) }}"
        />
        </div>
        
        <div class="my-2">
        <label for="defaultFormControlInput" class="form-label">phone_number</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="ketikkan nama katalog"
            aria-describedby="defaultFormControlHelp"
            name="phone_number"
            value="{{ old('phone_number', $publishers->phone_number) }}"
        />
        </div>
        <div class="my-2">
        <label for="defaultFormControlInput" class="form-label">address</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="ketikkan nama katalog"
            aria-describedby="defaultFormControlHelp"
            name="address"
            value="{{ old('address', $publishers->address) }}"
        />
       
        </div>

        <input type="submit" name="submit" class="btn btn-primary mt-4" value="Update">
    </div>
  </form>
</div>
@endsection