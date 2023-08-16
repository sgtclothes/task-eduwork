<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'anggota';

    public function user()
    {
        return $this->hasOne(User::class,'member_id');
    }
}
