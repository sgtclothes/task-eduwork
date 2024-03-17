<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $author = Author::select('books.titile', 'authors.id', 'authors.name', 'authors.email', 'authors.phone_number', 'authors.address')
        // ->join('books', 'author_id','=','authors.id')
        // ->get();

        $author = Author::with('books')->get();
        // return $author;
        return view('admin.author.index', compact('author'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.author.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'      =>['required'],
            'email'      =>['required'],
            'phone_number'      =>['required'],
            'address'      =>['required']
        ]);
        Author::create($request->all());


        return redirect('authors');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        return view('admin.author.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $this->validate($request,[
            'name'      =>['required'],
            'email'      =>['required'],
            'phone_number'      =>['required'],
            'address'      =>['required']
        ]);
        $author->update($request->all());


        return redirect('authors');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();

        return redirect('authors');
    }
}
