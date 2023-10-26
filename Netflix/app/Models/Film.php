<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function realisateur()
    {
        return $this->belongsTo(Acteur::class);
    }

    public function realisateurs()
    {
        return $this->belongsToMany('App\Acteur','acteur_id');
    }

    public function producteur()
    {
        return $this->belongsTo('App\Acteur','producteur_id');
    }
}