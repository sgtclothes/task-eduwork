<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'book_id',
        'date_start',
        'date_end',
        'status'
    ];

    public function members(){
        return $this->hasMany('App\Models\Member', 'member_id');
    }
    public function books(){
        return $this->hasMany('App\Models\Book', 'Book_id');
    }
}
