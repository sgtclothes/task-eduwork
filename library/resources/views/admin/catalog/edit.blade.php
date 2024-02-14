@extends('layouts.main')
@section('header', 'Edit Catalogs')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Catalog</h3>
                    </div>
                    <form method="post" action="{{ url('catalogs/' . $catalog->id) }}">
                        @csrf
                        {{ method_field('PUT') }}

                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Name catalog.." required value="{{ $catalog->name }}">
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    <a href="{{ url('catalogs') }}" class="btn btn-sm btn-secondary">back</a>
                </div>
            </div>
        </div>
    </div>

@endsection
