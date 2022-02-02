<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ward extends Model
{
    use HasFactory;

    public function citizen(){
        return $this->hasOne('App\Models\citizen');
    }

    public function lga(){
        return $this->belongsTo('App\Models\lga');
    }
}
