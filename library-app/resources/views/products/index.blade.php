@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row">
            <h4>{{ __('Products') }}</h4>
            <div class="col-sm-3 mt-3">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
