<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        return view('pages.product', compact('category'));
    }

    public function api()
    {
        $products = Product::with('category:id,name')->latest()->get();
        $datatable = datatables()->of($products)->addIndexColumn();
        return $datatable->make();
    }
    public function apiCategory()
    {
        $category = Category::latest()->get();

        return json_encode($category);
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
            'name' => 'string|required',
            'product_sn' => 'string|required',
            'category_id' => 'integer|required',
            'unit' => 'string|required',
            'price' => 'integer|required',
            'qty' => 'integer|required',
            'total' => 'integer|required'
        ]);

        Product::create($data);
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'product_sn' => 'string|required',
            'category_id' => 'integer|required',
            'unit' => 'string|required',
            'price' => 'integer|required',
            'qty' => 'integer|required',
            'total' => 'integer|required'
        ]);

        $product = Product::findOrFail($id);

        $product->update($data);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }
}
