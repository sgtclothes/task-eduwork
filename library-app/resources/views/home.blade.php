@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h4>{{ __('Dashboard') }}</h4>
            <br>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Table Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                        <strong>{{ Auth::user()->name }}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
