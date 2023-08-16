<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    protected $table = 'katalog';
    
    public function book_catalog()
    {
        return $this->hasMany(Book::class, 'catalog_id');
    }
}

