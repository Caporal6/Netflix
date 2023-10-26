<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function realisateur()
    {
        return $this->belongToMany('App\Acteur','Acteur_id');
    }

    public function producteur()
    {
        return $this->belongToMany('App\Acteur','Acteur_id');
    }
}
