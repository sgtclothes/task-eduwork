<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Catalog;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        $publishers = Publisher::all();
        $catalogs = Catalog::all();
        return view('admin.book', compact('authors', 'publishers', 'catalogs'));
    }

    public function api()
    {
        $books = Book::all();
        return json_encode($books);
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
        $request->validate([
            'isbn' => 'required',
            'title' => 'required|max:25',
            'year' => 'required|integer',
            'author_id' => 'required',
            'publisher_id' => 'required',
            'catalog_id' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|integer'
        ]);
        $book = Book::create($request->all());
        return $book;
        // return redirect('books');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'isbn' => 'required',
            'title' => 'required|max:25',
            'year' => 'required|integer',
            'author_id' => 'required',
            'publisher_id' => 'required',
            'catalog_id' => 'required',
            'quantity' => 'required|integer',
            'price' => 'required|integer'
        ]);
        $book->update($request->all());
        return redirect('books');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect('books');
    }
}
