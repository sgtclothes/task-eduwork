<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
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
        $authors = Author::with('book_author')->get();
        return view('pages.author.index', [
            'authors' => $authors
        ]);
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
        $data = $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "phone_number" => "required|numeric",
            "address" => "required|string"
        ]);

        Author::create($data);
        return redirect()->route('authors.index');
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
    public function update(Request $request, $id)
    {
        $rules =  [
            "name" => "required|string",
            "email" => "required|email",
            "phone_number" => "required|numeric",
            "address" => "required|string"
        ];
        
        $validateData = $request->validate($rules);
        $author = Author::findOrFail($id);

        $author->update($validateData);

        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
    }
}
