<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use GuzzleHttp\Psr7\Request;
use App\Models\Transaction as Tr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Transaction extends Component
{
    public $transaction_id, $invoice, $products_id, $category_id, $qty, $price, $enum, $total;
    public $updateMode = false;

    public function render()
    {
        $transaction = Tr::where('enum', 'IN_CART')->latest()->get();
        $products = Product::latest()->get();
        $categories = Category::latest()->get();
        $tr_total = Tr::select('enum', DB::raw('SUM(total) as total'))->where('enum', 'IN_CART')
            ->groupBy('enum')
            ->get();

        return view('livewire.transaction', compact('transaction', 'products', 'categories', 'tr_total'))
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
        if ($invoice = false) {
            $this->qty = '';
            $this->price = '';
            $this->enum = '';
            $this->total = '';
        }
    }

    public function store()
    {

        $validatedDate = $this->validate([
            'products_id' => 'required',
            'qty' => 'required',
        ]);
        $product = Product::where('id', $this->products_id)->get()->toArray();

        if ($product[0]['qty'] >= $this->qty) {
            $tr = Tr::create([
                'invoice' => 'INV-' . Auth::user()->id,
                'products_id' => $this->products_id,
                'category_id' => $product[0]['category_id'],
                'qty' => $this->qty,
                'price' => $product[0]['price'],
                'enum' => 'IN_CART',
                'total' => $product[0]['price'] * $this->qty
            ]);
            session()->flash('message', 'transaksi ditambahkan');
            session()->flash('status', 'success');
        } else {
            session()->flash('message', 'produk tidak tersedia');
            session()->flash('status', 'failed');
        }


        $this->resetInputFields(false);
    }

    public function edit($id)
    {
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
            'products_id' => 'required',
            'qty' => 'required',
        ]);

        $transaction = Tr::findOrFail($this->transaction_id);
        $product = Product::where('id', $this->products_id)->get()->toArray();

        if($product[0]['qty'] >= $this->qty) {
            $transaction->update([
             
                'products_id' => $this->products_id,
                'qty' => $this->qty,
                'price' => $this->price,
                'total' => $this->price * $this->qty
            ]);
    
            $this->updateMode = false;
    
            session()->flash('message', 'transaksi diperbarui');
            $this->resetInputFields();

        }else {
            session()->flash('message', 'produk tidak tersedia');
            session()->flash('status', 'failed');
        }
    }

    public function transfer()
    {
        $transaction = Tr::where('enum', 'IN_CART');
        $transaction->update([
            'enum' => 'PAID',
        ]);

        session()->flash('message', 'transaksi sudah dibayar');
    }

    public function delete($id)
    {
        Tr::destroy($id);
        session()->flash('message', 'transaksi dihapus');
    }
}
