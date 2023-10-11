<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction as Tr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::latest()->get();
        $products = Product::latest()->get();

        // $tr_total = Transaction::select(DB::raw("MIN(products_id), invoice,category_id"))->where('enum', 'PAID')->groupBy('invoice')->get();
        // $tr_total = Tr::select('invoice')->distinct('invoice')->where('enum', 'PAID')->get();
      
        return $tr_total;

        return view('pages.transaction',compact('category','products'));
    }

    public function api() {

        $transaction = Transaction::latest()->get();

        $datatable = datatables()->of($transaction)->addIndexColumn();

        return $datatable->make();
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
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
