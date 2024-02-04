<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\Member;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Author;
use App\Models\Book;
use App\Models\catalog;

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
        // $books1 = Book::with('publisher')->get();
        // $books2 = Book::with('catalog')->get();
        // $books3 = Book::with('author')->get();
        // $members = Member::with('user')->get();
        // $publishers= publisher::with('books')->get();
        // $authors= Author::with('books')->get();
        // $catalogs= catalog::with('books')->get();

        // no 1
        $data1 = Member::select('*')
        ->join('users', 'users.member_id', '=', 'members.id')
        ->get();

        // no 2
        $data2 = User::select('*')
        ->join('members', 'users.member_id', '!=', 'members.id')
        ->get();

        //no 3
        $data3 =Member::select('id','members.name')
        ->where('members.id','!=','transactions.member_id')
        ->get();

        //no 4
        $data4 = Transaction::select('members.id','members.name','members.phone_number')
        ->join('members','members.id','=','transactions.member_id')
        ->get();

        // no 5
        $data5 = Transaction::select('members.id','members.name','members.phone_number',Transaction::raw('COUNT(transactions.member_id) as total'))
        ->join('members','members.id','=','transactions.member_id')
        ->groupBy('members.id','members.name','members.phone_number')
        ->havingRaw('COUNT(transactions.member_id)>1')
        ->get();

        // no 6
        $data6 =Transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
        ->join('members','members.id','=','transactions.member_id')
        ->get();

        // no 7
        $data7 = Transaction::select('members.name','members.phone_number','members.address','transactions.date_start','transactions.date_end')
        ->join('members','members.id','=','transactions.member_id')
        ->where(Transaction::raw('MONTH(transactions.date_end)'),'=','06')
        ->get();

        // no 8


        // no 9


        // no 10


        // no 11


        // no 12


        // no 13


        // no 14


        // no 15


        // no 16


        // no 17


        // no 18


        // no 19


        // no 20

        
        return $data7;
        return view('home');
    }
}
