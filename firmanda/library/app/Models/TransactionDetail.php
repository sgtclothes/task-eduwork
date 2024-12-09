<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = ['book_id','qty','transaction_id', 'status'];

    public function book(){
        return $this->belongsTo('App\Models\Book','book_id');
    }
    public function transaction(){
        return $this->belongsTo('App\Models\Transaction','transaction_id');
    }
}
