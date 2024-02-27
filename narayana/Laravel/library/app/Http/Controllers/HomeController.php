<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Author;
use App\Models\Book;
use App\Models\Catalog;
use App\Models\Publisher;
use App\Models\Member;
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
        // $members = Member::with('user')->get();
        // $books = Book::with('publisher')->get();
        // $publisher = Publisher::with('books')->get();
        // $author = Author::with('books')->get();
        // $catalog = Catalog::with('books')->get();



        // $data = Member::select('*')
        //                 ->join('users', 'users.member_id','=','members.id')
        //                 ->get();

        // $data2 = Member::select('*')
        //                 ->get();

        // $data3 = Transaction::select('members.id', 'members.name')
        //                 ->rightjoin('members', 'members.id', '=', 'transactions.member_id')
        //                 ->where('transactions.member_id', null)
        //                 ->get();

        // $data4 = Member::select('members.id', 'members.name', 'members.phone_number', 'transactions.date_start')
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->orderBy('members.id', 'asc')
        //                 ->get();

        // $data5 = Member::select('members.id', 'members.name', 'members.phone_number', 'transactions.date_start', 'qty')
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        //                 ->orderBy('members.id', 'asc')
        //                 ->get();

        // $data6 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        //                 ->get();

        // $data7 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        //                 ->whereMonth('transactions.date_end', 6)
        //                 ->get();

        // $data8 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        //                 ->whereMonth('transactions.date_end', 5)
        //                 ->get();

        // $data9 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        //                 ->whereMonth('transactions.date_end', '=', 6)
        //                 ->whereMonth('transactions.date_start', '=', 6)
        //                 ->get();

        // $data10 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        //                 ->where('members.address', '324 Kohler Skyway Apt. 078West Shaylee, NE 39344')
        //                 ->get();

        // $data11 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end')
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        //                 ->where('members.gender', 'M')
        //                 ->get();

        // $data12 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start', 'transactions.date_end', 'isbn', 'books.qty')
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        //                 ->join('books', 'transaction_details.book_id', '=', 'books.id')
        //                 ->where('books.qty', '2')
        //                 ->get();

        // $data13 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start',
        //                 'transactions.date_end', 'isbn', 'books.qty', 'books.titile', 'books.price', Book::raw('books.qty * books.price as total_price'))
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        //                 ->join('books', 'transaction_details.book_id', '=', 'books.id')
        //                 ->get();

        // $data14 = Member::select('members.name', 'members.phone_number', 'members.address', 'transactions.date_start',
        //                 'transactions.date_end', 'isbn', 'books.qty', 'books.titile', Catalog::raw('catalogs.name as catalogs_name') , Publisher::raw('publishers.name as publisher_name'))
        //                 ->join('transactions', 'transactions.member_id', '=', 'members.id')
        //                 ->join('transaction_details', 'transaction_details.transaction_id', '=', 'transactions.id')
        //                 ->join('books', 'transaction_details.book_id', '=', 'books.id')
        //                 ->join('catalogs', 'books.catalog_id', '=', 'catalogs.id')
        //                 ->join('publishers', 'books.publisher_id', '=', 'publishers.id')
        //                 ->get();

        // $data15 = Catalog::select('catalogs.name', 'catalogs.created_at', 'catalogs.updated_at', 'books.titile')
        //                 ->join('books', 'books.catalog_id', '=', 'books.catalog_id')
        //                 ->get();

        // $data16 = Catalog::select('catalogs.name', 'catalogs.created_at', 'catalogs.updated_at', 'books.titile')
        //                 ->join('books', 'books.catalog_id', '=', 'books.catalog_id')
        //                 ->get();

        // $data17 = Publisher::select('publishers.name')
        //                 ->where('publishers.name', 'Susan Russel')
        //                 ->get();

        // $data18 = Book::select('books.price')
        //                         ->where('books.price', '>', '10000')
        //                 ->get();

        // $data19 = Book::select('books.titile', 'books.year', 'publishers.id', 'authors.id', 'books.qty', 'books.price')
        //                 ->join('publishers', 'publishers.id', '=', 'books.publisher_id')
        //                 ->join('authors', 'authors.id', '=', 'books.author_id')
        //                 ->where('authors.id', '11')
        //                 ->get();

        $data20 = Member::select('*')
                        ->whereMonth('members.created_at', '=', 6)
                        ->get();






        return $data20;


        return view('home');
    }
}
