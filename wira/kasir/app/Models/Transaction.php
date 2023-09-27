<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice','products_id','category_id',
        'qty','price','enum','total'
    ];

    public function product() {
        return $this->belongsTo(Product::class,'products_id','id');
    }

    public function category() {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
