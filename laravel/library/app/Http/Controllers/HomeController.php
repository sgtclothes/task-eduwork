<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Author;
use App\Models\Catalog;
use App\Models\Publisher;
use App\Models\Book;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // // $members = Member::with('user')->get();
        // $books = Book::with('publisher')->get();

        // $data1 = Member::select('*')->where('members.gender', 'like', 'P')->get();
        // $data2 = Member::select('*')->where('members.id', 'like', '2')->get();
        // $data3 = Transaction::select('members.id', 'members.name')->rightJoin('members', 'transactions.member_id', '=', 'members.id')->where('transactions.id', NULL)->get();
        // $data4 = Transaction::select('transactions.member_id', 'members.name', 'members.phone_number')->leftJoin('members', 'transactions.member_id', '=', 'members.id')->orderBy('members.name', 'asc')->get();
        // $data5 = TransactionDetail::select('transaction_details.id', 'transactions.member_id',  'transaction_details.transaction_id',)->join('transactions', 'transaction_details.id', '=', 'transactions.member_id',)->groupBy('transaction_details.id', 'havingCount', 'transaction_details.transaction_id', '>', '1')->orderBy('transaction_details.transaction_id', 'desc')->get();



        
        // return $data5;
        return view('home');
    }
}
