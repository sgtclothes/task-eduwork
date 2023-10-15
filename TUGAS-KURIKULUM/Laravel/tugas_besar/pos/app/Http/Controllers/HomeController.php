<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Sale;
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
        $total_product = Product::count();
        $total_member = Member::count();
        $total_sale = Sale::count();
        $total_purchase = Purchase::count();

        return view('home', compact('total_product', 'total_member', 'total_sale', 'total_purchase'));
    }
}
