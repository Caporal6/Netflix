<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acteur extends Model
{
    use HasFactory;

    protected $fillable = ['nom','date_naissance','lieux','photo'];

    
    public function films(){
        return $this->belongsToMany(Film::class);
    }

    
}