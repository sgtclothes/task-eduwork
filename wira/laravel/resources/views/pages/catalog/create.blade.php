@extends('layouts.template')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <form action="{{ route('catalog-store') }}" method="POST">
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
        />
       
        </div>

        <input type="submit" name="submit" class="btn btn-primary mt-4" value="Create">
    </div>
  </form>
</div>
@endsection