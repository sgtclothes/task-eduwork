@extends('layouts.template')

@section('title', 'catalog page')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <form action="{{ route('catalog-update', $catalogs->id) }}" method="POST">
    @csrf
     <div class="card-body col-lg-4 col-md-3">
        <div>
        <label for="defaultFormControlInput" class="form-label">Name</label>
        <input
            type="text"
            class="form-control"
            id="defaultFormControlInput"
            placeholder="ketikkan nama katalog"
            aria-describedby="defaultFormControlHelp"
            name="name"
            value="{{ old('name', $catalogs->name) }}"
        />
       
        </div>

        <input type="submit" name="submit" class="btn btn-primary mt-4" value="Update">
    </div>
  </form>
</div>
@endsection