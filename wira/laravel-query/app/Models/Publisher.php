<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;

    protected $table = 'penerbit';

    public function book_publisher()
    {
        return $this->hasMany(Book::class, 'publisher_id');
    }
}
