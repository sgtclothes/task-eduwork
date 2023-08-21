<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publishers = Publisher::with('book_publisher')->get();

        return view('pages.publisher.index', [
            'publishers' => $publishers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.publisher.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string",
            "email" => "required|email",
            "phone_number" => "required|string",
            "address" => 'required|string'
        ]);

        Publisher::create($data);
        return redirect()->route('publishers.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $publishers = Publisher::find($id);
        return view('pages.publisher.edit',
        [
            'publishers' => $publishers
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $rules = [
            "name" => "required|string",
            "email" => "required|email",
            "phone_number" => "required|string",
            "address" => 'required|string'
        ];

        $validateData = $request->validate($rules);
        $publishers = Publisher::findOrFail($id);

        $publishers->update($validateData);
        return redirect()->route('publishers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $publishers = Publisher::find($id);
        $publishers->delete();

        return redirect()->route('publishers.index');
    }
}
