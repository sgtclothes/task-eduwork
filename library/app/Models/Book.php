<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function publisher(){
        return $this->belongsTo('App\Models\Publisher', 'publisher_id');
    }
    public function author(){
        return $this->belongsTo('App\Models\Publisher', 'author_id');
    }
    public function catalog(){
        return $this->belongsTo('App\Models\Publisher', 'catalog_id');
    }
}