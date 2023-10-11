<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Transaction as Tr;
use Illuminate\Support\Facades\DB;

class TransactionDetail extends Component
{
    public $showMode, $transactions, $transaction_id, $invoice, $products_id, $category_id, $qty, $price, $enum, $total;


    public function render()
    {
        $transaction = Tr::where('enum', 'PAID')->latest()->get();
        // dd($transaction);
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        $tr_total = Tr::select('invoice')->distinct('invoice')->where('enum', 'PAID')->get();
      
        return view('livewire.transaction-detail', compact('transaction', 'products', 'categories', 'tr_total'))->layout('layouts.tr');
    }

    public function edit($invoice)
    {
        return redirect()->to('/transaction-detail-show');

        $transaction = Tr::where('invoice', $invoice)->where('enum', 'PAID');
    

        $this->invoice = $invoice;
        $this->products_id = $transaction->products_id;
        $this->category_id = $transaction->category_id;
        $this->qty = $transaction->qty;
        $this->price = $transaction->price;
        $this->enum = $transaction->enum;
        $this->total = $transaction->total;

      
        $this->emit('showModal');

    }
}
