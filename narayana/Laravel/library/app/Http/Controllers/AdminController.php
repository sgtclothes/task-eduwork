<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Models\Book;
use App\Models\Catalog;
use App\Models\Author;
use App\Models\Publisher;
use App\Models\Transaction;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $total_anggota = Member::count();
        $total_buku = Book::count();
        $total_peminjaman = Transaction::whereMonth('date_start', date('m'))->count();
        $total_penerbit = Publisher::count();   
    
        $data_donut = Book::select(DB::raw("COUNT(publisher_id) as total"))->groupBy('publisher_id')->orderBy('publisher_id', 'asc')->pluck('total');
        $label_donut = Publisher::orderBy('publisher_id', 'asc')->join('books', 'publisher_id', '=', 'publisher_id')->groupBy('publishers.name')->pluck('publishers.name');
        
        $data_pie = Book::select(DB::raw("COUNT(author_id) as total"))->groupBy('author_id')->orderBy('author_id', 'asc')->pluck('total');
        $label_pie = Author::orderBy('author_id', 'asc')->join('books', 'author_id', '=', 'author_id')->groupBy('authors.name')->pluck('authors.name');
        
        $label_bar = ['Borrow Date', 'Return Date'];
        $data_bar = [];

        foreach ($label_bar as $key => $value) {
            $data_bar[$key]['label'] = $label_bar[$key];
            $data_bar[$key]['backgroundColor'] = $key == 0 ? 'rgb(60, 141, 180,0.9)' : 'rgb(137, 137, 137)';
            $data_month = [];

            foreach (range(1,12) as $month) {
                if ($key == 0) {
                    $total = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('date_start', $month)->first();
                } else {
                    $total = Transaction::select(DB::raw("COUNT(*) as total"))->whereMonth('date_end', $month)->first();
                }
                $data_month[] = $total ? $total->total : 0;
            }
            $data_bar[$key]['data'] = $data_month;
        }
        return view('admin.dashboard', compact('total_buku', 'total_anggota', 'total_peminjaman', 'total_penerbit', 'data_donut', 'label_donut', 'data_pie', 'label_pie', 'data_bar',));
    }
}
