<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catalogs = Catalog::with('book_catalog')->get();

        // return $catalogs;
        return view('pages.catalog.index', [
            'catalogs' => $catalogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.catalog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => "required|string"
        ]);

        Catalog::create($data);
        return view('pages.catalog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Catalog $catalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Catalog $catalog,$id)
    {
        $catalogs = Catalog::find($id);

        return view('pages.catalog.edit', [
            'catalogs' => $catalogs
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $rules =  [
            'name' => 'required|string'
        ];
        
        $validateData = $request->validate($rules);
        $catalogs = Catalog::findOrFail($id);

        $catalogs->update($validateData);

        return redirect()->route('catalog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $catalog = Catalog::find($id);
        $catalog->delete();

        return redirect()->route('catalog');
    }
}
