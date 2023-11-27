<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Dashboard;
use App\Models\Member;
use App\Models\Publisher;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $total_member = Member::count();
        $total_buku = Book::count();
        $total_peminjaman = Transaction::whereMonth('tgl_pinjam', date('m'))->count();
        $total_publisher = Publisher::count();

        $data_donut = Book::select(DB::raw("COUNT(id_publisher) as total"))->groupBy('id_publisher')->orderBy('id_publisher', 'asc')->pluck('total');
        $label_donut = Publisher::orderBy('publisher.id', 'asc')->join('books', 'books.id_publisher', '=', 'publishers.id')->groupBy('name')->pluck('name');

        $label_bar = ['Peminjaman'];
        $data_bar = [];

        foreach ($label_bar as $key => $value) {
            # code...
        }

        return view('admin.dashboard.index', compact(''));
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
    }

    /**
     * Display the specified resource.
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}
