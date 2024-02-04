<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use App\Models\Member;
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
        $books1 = Book::with('publisher')->get();
        $books2 = Book::with('catalog')->get();
        $books3 = Book::with('author')->get();
        $members = Member::with('user')->get();
        $publishers= publisher::with('books')->get();
        $authors= Author::with('books')->get();
        $catalogs= catalog::with('books')->get();

        return $authors;
        return view('home');
    }
}
