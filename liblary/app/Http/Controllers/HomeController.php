<?php

namespace App\Http\Controllers;

use App\models\Member;
use App\models\Publisher;
use App\models\Book;
use App\models\Author;
use App\models\Catalog;
use App\models\Transaction;
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
        //$publisher = Publisher::with('books')->get();

        //no 1
        $data1 = Member::select('*')->where('gender', '=', '1')->get();

        //no 2
        $data2 = Member::select('*')->where('gender', '!=', '1')->get();

        //no 3
        $data3 = Transaction::select('members.name', 'transactions.member_id', 'transactions.date_start')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->where('transactions.date_start', NULL)->get();

        //no 4
        $data4 = Transaction::select('member_id', 'members.name', 'members.phone_number')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->where('transactions.date_start', '!=', NULL)->get();

        //no 5
        $data5 = Transaction::select('member_id', 'members.name', 'members.phone_number',)
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->where('transactions.member_id', 'HAVING COUNT("transactions.member_id") > ', '1')->get();

        //no 6
        $data6 = Transaction::select('members.name', 'members.phone_number', 'members.addres', 'transactions.date_start', 'transactions.date_end')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->get();

        //no 7
        $data7 = Transaction::select('members.name', 'members.phone_number', 'members.addres', 'transactions.date_start', 'transactions.date_end')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->where('transactions.date_end', 'MONTH (transactions.date_end) =', '06')
        ->get();

        //no 8
        $data8 = Transaction::select('members.name', 'members.phone_number', 'members.addres', 'transactions.date_start', 'transactions.date_end')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->where('transactions.date_start', 'MONTH (transactions.date_start) =', '05')
        ->get();

        //no 9
        $data9 = Transaction::select('members.name', 'members.phone_number', 'members.addres', 'transactions.date_start', 'transactions.date_end')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->where('transactions.date_start', 'MONTH (transactions.date_start) =', '06', 'AND', 'MONTH(transactions.date_end) =', '06')
        ->get();

        //no 10
        $data10 = Transaction::select('members.name', 'members.phone_number', 'members.addres', 'transactions.date_start', 'transactions.date_end')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->where('members.addres', 'LIKE', '%Bandung%')
        ->get();

        //no 11
        $data11 = Transaction::select('members.name', 'members.phone_number', 'members.addres', 'transactions.date_start', 'transactions.date_end')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->where('members.addres', 'LIKE', '%Bandung%', 'AND', 'members.gender', '=', '0')
        ->get();

        //no 12
        $data12 = Transaction::select('members.name', 'members.phone_number', 'members.addres', 'transactions.date_start', 'transactions.date_end', 'transaction_details.book_id', 'transaction_details.qty')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->join('transaction_details', 'transactions.id', '=', 'transaction_details.transaction_id')
        ->where('transaction_details.qty', '>', '1')
        ->get();

        //no 13
        $data13 = Transaction::select('members.name', 'members.phone_number', 'members.addres', 'transactions.date_start', 'transactions.date_end', 'transaction_details.book_id', 'transaction_details.qty', 'books.title', 'books.price')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->join('transaction_details', 'transactions.id', '=', 'transaction_details.transaction_id')
        ->join('books', 'transaction_details.book_id', '=', 'books.id')
        ->get();

        //no 14
        $data14 = Transaction::select('members.name', 'members.phone_number', 'members.addres', 'transactions.date_start', 'transactions.date_end', 'transaction_details.book_id', 'transaction_details.qty', 'books.title', 'books.price', 'publishers.name', 'authors.name', 'catalogs.name')
        ->join('members', 'transactions.member_id', '=', 'members.id')
        ->join('transaction_details', 'transactions.id', '=', 'transaction_details.transaction_id')
        ->join('books', 'transaction_details.book_id', '=', 'books.id')
        ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
        ->join('authors', 'books.author_id', '=', 'authors.id')
        ->join('catalogs', 'books.catalog_id', '=', 'catalogs.id')
        ->get();

        //no 15
        $data15 = Catalog::select('*')
        ->join('books', 'catalogs.id', '=', 'books.catalog_id')
        ->get();

        //no 16
        $data16 = Book::select('*')
        ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
        ->get();

        //no 17
        $data17 = Book::select('author_id')
        ->where('author_id', '=', '10')
        ->get();

        //no 18
        $data18 = Book::select('*')
        ->where('price', '>', '10000')
        ->get();

        //no 19
        $data19 = Book::select('isbn', 'title', 'year', 'publisher_id', 'author_id', 'catalog_id', 'qty', 'price', 'publishers.name')
        ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
        ->where('publishers.name', 'LIKE', '%Jefferey Gleichner%', 'AND', 'books.qty', '>', '2')
        ->get();

        //no 20
        $data20 = Member::select('*')
        ->where('created_at', 'LIKE', '%2023-10-06 12:45:51%')
        ->get();


        return $data20;
        return view('home');
    }
}
