<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
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
     * Display a listing of the resource.
     */
    public function index()
    {
        // $authors = Author::all();
        return view('admin.author');
    }
    public function api()
    {
        $authors = Author::all();
        // untuk menambah atau mengedit foreach menyertakan vue js
        // cara pertama
        foreach ($authors as $key => $author) {
            $author->tanggal = dateFormat($author->created_at);
        }

        // cara kedua
        // $datatables = datatables()->of($authors)
        //                         ->addColumn('tanggal', function($authors){
        //                             return dateFormat($authors->created_at);
        //                         })
        //                         ->addIndexColumn();

        $datatables = datatables()->of($authors)->addIndexColumn();
        return $datatables->make(true);
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
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