<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;

class TransactionDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction = Transaction::where('enum', 'PAID')->latest()->get();
        // dd($transaction);
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        $tr_total = Transaction::select('invoice')->distinct('invoice')->where('enum', 'PAID')->get();

        return view('pages.transaction_detail.index', compact('transaction', 'products', 'categories', 'tr_total'));
    }

    public function api()
    {
        // $transaction = Transaction::where('enum', 'PAID')->get();
        $transaction =  Transaction::select('invoice')->distinct('invoice')->where('enum', 'PAID')->get();
        $datatables = datatables()->of($transaction)
            ->addColumn('products_id', function ($transaction) {
                return $transaction->qty;
            })->addIndexColumn();
        return $datatables->make();
    }

    public function apiDetail($invoice) {
        $transaction = Transaction::where('invoice', $invoice)->get();
        return $transaction;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TransactionDetail $transactionDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TransactionDetail $transactionDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TransactionDetail $transactionDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TransactionDetail $transactionDetail)
    {
        //
    }
}
