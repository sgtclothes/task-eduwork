@extends('layouts.admin')
@section('tittle', 'bookPage')

@section('css')
@endsection

@section('header')
    book

@endsection
@section('content')
    <div class="container">
        {{-- search --}}

        <div class="row">
            <div class="col-md-5 offset-md-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                    <input type="text" class="form-control" autocomplete="off" placeholder="search the tittle">
                </div>
            </div>
            <div class="col-md-2">
                <a href="#" class="btn btn-primary" style="margin-left:10px;">create new </a>
            </div>
        </div>

        {{-- searche dn --}}
        <hr style="height:2px;border-width:0;color:gray;background-color:gray">

        ini adalah halaman book
    </div>

@endsection

@section('js')

@endsection
