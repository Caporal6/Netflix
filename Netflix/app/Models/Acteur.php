<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    use HasFactory;

    public function films(){
        return $this->belongsToMany('App\Film','film_id');
    }
    
    
}