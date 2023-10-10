<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class,'userId');
    }
    use HasFactory;
}