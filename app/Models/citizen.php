<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class citizen extends Model
{
    use HasFactory;

    public function ward(){
        return $this->belongsTo('App\Models\ward');
    }
}
