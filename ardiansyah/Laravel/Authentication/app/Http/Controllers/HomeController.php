<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Book;
use App\Models\Publisher;
use App\Models\Catalog;
use App\Models\Transaction;
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
        // $members = Member::with('user')->get();
        // $books = Book::with('publisher')->get();
        // $books = Book::with('catalog')->get();
        // $books = Book::with('author')->get();

        // // no 1
        // $data = Member::select('*')
        //     ->where()
        //     ->get();

        // no 2
        // $data = Member::select('*')
        // ->leftjoin('users', 'users.member_id', '=', 'members.id')
        // ->where('users.id', NULL)
        // ->get();

        // no 3
        // $data = Transaction::select('members.id', 'members.name')
        // ->rightJoin('members', 'members.id', '=', 'transactions.member_id')
        // ->where('transactions.member_id', NULL)
        // ->get();

        // no 4
        // $data = Member::select('members.id', 'members.name', 'members.phone_number')
        // ->join('transactions', 'transactions.member_id', '=', 'members.id')
        // ->orderBy('members.id', 'asc')
        // ->get();



        // return $data;
        // return $data2;
        return view('home');
    }
}