<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\Member;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Author;
use App\Models\Book;
use App\Models\Catalog;

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
        $data8 = Transaction::select('members.name',"members.phone_number",'members.address','transactions.date_start','transactions.date_end')
        ->join('members','members.id','transactions.member_id')
        -> where(Transaction::raw('MONTH(transactions.date_start)'),'=','05')
        ->get();

        // no 9
        $data9= Transaction::select('members.name',"members.phone_number",'members.address','transactions.date_start','transactions.date_end')
        ->join('members','members.id','transactions.member_id')
        ->where(Transaction::raw('MONTH(transactions.date_start)'),'=','06', 'AND', Transaction::raw('MONTH(transactions.date_end)'),'=','06')
        ->get();

        // no 10
        $data10 = Transaction::select('members.name',"members.phone_number",'members.address','transactions.date_start','transactions.date_end')
        ->join('members','members.id','transactions.member_id')
        ->where("members.address","LIKE %Carlos% ")
        ->get();

        // no 11
        $data11 = Transaction::select('members.name',"members.phone_number",'members.address','transactions.date_start','transactions.date_end')
        ->join('members','members.id','transactions.member_id')
        ->where("members.address","LIKE"," %Carlos% ","AND","members.gender","=","P")
        ->get();
        // no 12
        $data12 =Transaction::select('members.name',"members.phone_number",'members.address','transactions.date_start','transactions.date_end','books.isbn','transaction_details.qty')
        ->join('members','members.id','transactions.member_id')
        ->join('transaction_details','transaction_details.transaction_id','=','transactions.id')
        ->join('books','books.id','transaction_details.book_id')
        ->where("transaction_details.qty",'=','1')
        ->get();

        // no 13
        $data13 =Transaction::select('members.name',"members.phone_number",'members.address','transactions.date_start','transactions.date_end','books.isbn','transaction_details.qty','books.title',Transaction::raw('transaction_details.qty * books.price'))
        ->join('members','members.id','transactions.member_id')
        ->join('transaction_details','transaction_details.transaction_id','=','transactions.id')
        ->join('books','books.id','transaction_details.book_id')
        ->get();

        // no 14
        $data14 =Transaction::select('members.name',"members.phone_number",'members.address','transactions.date_start','transactions.date_end','books.isbn','transaction_details.qty','books.title','publishers.name','authors.name','catalogs.name')
        ->join('members','members.id','transactions.member_id')
        ->join('transaction_details','transaction_details.transaction_id','=','transactions.id')
        ->join('books','books.id','transaction_details.book_id')
        ->join('catalogs','catalogs.id','books.catalog_id')
        ->join('publishers','publishers.id','books.publisher_id')
        ->join('authors','authors.id','books.author_id')
        ->get();

        // no 15
        $data15 = Book::select('catalogs.id','catalogs.name','books.title')
        ->join('catalogs','catalogs.id','books.catalog_id')
        ->get();

        // no 16
        $data16 = Book::select('*','publishers.name')
        ->leftJoin('publishers','publishers.id','books.publisher_id')
        ->get();

        // no 17
        $data17 = Book::select('books.author_id',Book::raw('COUNT(books.author_id) as total_author'))
        ->where('books.author_id','=','6')
        ->groupBy('books.author_id')
        ->get();

        // no 18
        $data18 = Book::select('*')
        ->where('books.price','>','10000')
        ->get();

        // no 19
        $data19 = Book::select('*')
        ->join('publishers','publishers.id','books.publisher_id')
        ->where('publishers.name','=','Zechariah Schoen', 'AND','books.qty','>','10')
        ->get();

        // no 20
        $data20 = Member::select('*')
        ->where(Member::raw("MONTH(members.created_at)"),'=','02')
        ->get();
        
        // return $data20;
        return view('home');
    }
}
