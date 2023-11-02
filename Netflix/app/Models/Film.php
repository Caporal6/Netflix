<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function realisateur()
    {
        return $this->belongsTo(Acteur::class);
    }

    public function acteurs()
    {
        return $this->belongsToMany(Acteur::class);
    }

    public function producteur()
    {
        return $this->belongsTo(Acteur::class);
    }
}