<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Transaction as Tr;
use Illuminate\Support\Facades\DB;

class TransactionDetail extends Component
{
    public function render()
    {
      
        $transaction = Tr::where('enum', 'PAID')->latest()->get();
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        $tr_total = Tr::select('enum', DB::raw('SUM(total) as total'))->where('enum', 'PAID')
        ->groupBy('enum')
            ->get();
        return view('livewire.transaction-detail', compact('transaction', 'products', 'categories', 'tr_total'))->layout('layouts.tr');
    }
}
