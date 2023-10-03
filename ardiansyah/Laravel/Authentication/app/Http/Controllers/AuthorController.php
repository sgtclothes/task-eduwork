<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct() {
        $this->middleware('auth');
    }

     public function index()
    {
        //
        $authors = Author::all();
        return view('admin.author.index', compact('authors'));
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
        //
        return $request;
        // $author = new Author;
        // $author->name = $request->name;
        // $author->email = $request->email;
        // $author->phone_number = $request->phone_number;
        // $author->address = $request->address;
        // $author->save();
        // $this->validate($request, [
        //     'name' => 'required',
        //     'email' => 'required',
        //     'phone_number' => 'required',
        //     'address' => 'required']);

        // Author::create($request->all());

        // return redirect('author');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
