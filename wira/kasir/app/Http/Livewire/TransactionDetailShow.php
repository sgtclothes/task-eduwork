<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transaction as Tr;

class TransactionDetailShow extends Component
{
    public $showMode, $transactions, $transaction_id, $invoice, $products_id, $category_id, $qty, $price, $enum, $total;

    public function mount($invoice)
    {
        $transaction = Tr::with('product')->where('invoice', $invoice)->where('enum', 'PAID')->get()->toArray();
       
        $this->invoice = $invoice;
      
    }

    public function render()
    {
        $transaction = Tr::with(['product','category'])->where('invoice', $this->invoice)->where('enum', 'PAID')->get();
        
        return view('livewire.transaction-detail-show', compact('transaction'))->layout('layouts.tr');
    }
}
