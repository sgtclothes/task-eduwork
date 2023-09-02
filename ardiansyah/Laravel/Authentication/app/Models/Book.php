<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function publisher()
    {
        # code...
        return $this->belongsTo('App\Models\Publisher', 'publisher_id');
    }

    public function catalog()
    {
        # code...
        return $this->belongsTo('App\Models\Catalog', 'catalog_id');
    }

    public function author()
    {
        # code...
        return $this->belongsTo('App\Models\Author', 'author_id');
    }

}
