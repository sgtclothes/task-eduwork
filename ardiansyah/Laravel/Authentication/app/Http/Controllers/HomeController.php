<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Book;
use App\Models\Publisher;
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
        // $members = Member::with('user')->get();
        // $books = Book::with('publisher')->get();
        // $books = Book::with('catalog')->get();
        // $books = Book::with('author')->get();
        
        return view('home');
    }
}
