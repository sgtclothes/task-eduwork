<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction as Tr;
use GuzzleHttp\Psr7\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Transaction extends Component
{
    public $transaction_id, $invoice, $products_id, $category_id, $qty, $price, $enum, $total;
    public $updateMode = false;

    public function render()
    {
        $transaction = Tr::where('enum','IN_CART')->latest()->get();
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        $tr_total = Tr::select('enum', DB::raw('SUM(total) as total'))->where('enum', 'IN_CART')
        ->groupBy('enum')
            ->get();

        return view('livewire.transaction', compact('transaction', 'products', 'categories','tr_total'))
            ->layout('layouts.tr');
    }

    private function resetInputFields($invoice = true)
    {
        if ($invoice) {
            $this->invoice = '';
            $this->qty = '';
            $this->price = '';
            $this->enum = '';
            $this->total = '';
        }
        if ($invoice = false){
            $this->qty = '';
            $this->price = '';
            $this->enum = '';
            $this->total = '';
        }
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'invoice' => 'required',
            'products_id' => 'required',
            'category_id' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);
    
        $tr = Tr::create([
            'invoice' => '#AA11' . $this->invoice,
            'products_id' => $this->products_id,
            'category_id' => $this->category_id,
            'qty' => $this->qty,
            'price' => $this->price,
            'enum' => 'IN_CART',
            'total' => $this->price * $this->qty
        ]);

        session()->flash('message', 'transaksi ditambahkan');
       
        $this->resetInputFields(false);
    }

    public function edit($id){
        $transaction = Tr::findOrFail($id);

        $this->transaction_id   = $id;
        $this->invoice          = $transaction->invoice;
        $this->products_id      = $transaction->products_id;
        $this->category_id      = $transaction->category_id;
        $this->qty              = $transaction->qty;
        $this->price            = $transaction->price;
        $this->total            = $transaction->price * $transaction->qty;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'invoice' => 'required',
            'products_id' => 'required',
            'category_id' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);

        $transaction = Tr::findOrFail($this->transaction_id);

        $transaction->update([
            'invoice' => $this->invoice,
            'products_id' => $this->products_id,
            'category_id' => $this->category_id,
            'qty' => $this->qty,
            'price' => $this->price,
            'enum' => 'IN_CART',
            'total' => $this->price * $this->qty
        ]);

        $this->updateMode = false;

        session()->flash('message','transaksi diperbarui');
        $this->resetInputFields();
    }

    public function transfer()
    {
        $transaction = Tr::where('enum', 'IN_CART');
        $transaction->update([
            // 'invoice' => $this->invoice,
            // 'products_id' => $this->products_id,
            // 'category_id' => $this->category_id,
            // 'qty' => $this->qty,
            // 'price' => $this->price,
            'enum' => 'PAID',
            // 'total' => $this->price * $this->qty
        ]);

        session()->flash('message', 'transaksi sudah dibayar');

    }

    public function delete($id)
    {
        Tr::destroy($id);
        session()->flash('message', 'transaksi dihapus');
       
    }
}
