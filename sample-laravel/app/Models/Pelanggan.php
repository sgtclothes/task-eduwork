<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;
    /**
     * fillable
     *
     * @var array
     */
    public $table = 'pelanggan'; 
    protected $fillable = [
        'id',
        'nama',
        'alamat',
        'jenis_kelamin',
    ];
}



