@extends('layouts.admin')
@section('tittle','transactionPage')
@section('header')
transaction
@endsection
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title"> Return Book</h3>
    </div>

    <div class="card body">
        <form action="">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
        </form>
    </div>
</div>
@endsection