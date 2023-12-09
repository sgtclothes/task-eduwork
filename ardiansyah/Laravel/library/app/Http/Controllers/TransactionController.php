<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $members = Member::all();
        $transactions = Transaction::all();
        $transaction_data = Transaction::leftJoin('members', 'transactions.member_id', '=', 'members.id')->get();
        // dd($transaction_data->toArray());
        // dd($transactions->toArray());
        return view('admin.transaction.transaction', compact('transactions', 'members', 'transaction_data'));
    }

    public function api()
    {

        $transactions = Transaction::all();

        // foreach ($transactions as $key => $transaction) {
        //     $transaction->date = convert_date($transaction->created_at);
        // }

        $datatables = datatables()->of($transactions)->addIndexColumn();

        return $datatables->make(true);
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
        // validasi isian di form tidak boleh kosong (double protection)
        $this->validate($request, [
            'member_id' => ['required'],
            'date_start' => ['required'],
            'date_end' => ['required'],
        ]);

        // cara pertama save sebuah data
        // $catalog = new Catalog;
        // $catalog->name = $request->name;
        // $catalog->save();

        // cara kedua save sebuah data tapi ada yg harus ditambahkan di model
        Transaction::create($request->all());

        return redirect('transactions');
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
        // validasi isian di form tidak boleh kosong (double protection)
        $this->validate($request, [
            'member_id' => ['required'],
            'date_start' => ['required'],
            'date_end' => ['required'],
        ]);

        // cara pertama save sebuah data
        // $catalog = new Catalog;
        // $catalog->name = $request->name;
        // $catalog->save();

        // cara kedua save sebuah data tapi ada yg harus ditambahkan di model
        $transaction->update($request->all());

        return redirect('transactions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
    }
}