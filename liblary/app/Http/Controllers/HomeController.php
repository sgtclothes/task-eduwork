<?php

namespace App\Http\Controllers;

use App\models\Member;
use App\models\Publisher;
use App\models\Book;
use App\models\Author;
use App\models\Catalog;
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
        $publisher = Publisher::with('books')->get();

        return $publisher;
        return view('home');
    }
}
