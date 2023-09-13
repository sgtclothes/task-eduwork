<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index()
    {
        $tes = date("Y-m-d");

        $late_date = Transaction::with('member:id,name')
            ->where('date_end', '<', $tes)
            ->where('status', '=', 1)->get();

        return view('layouts.template', compact('late_date'));
    }
}
