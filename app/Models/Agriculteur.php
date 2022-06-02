<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agriculteur extends Personne
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'tel', 'numPersonne'];
    protected $primaryKey = 'numAgriculteur';

    public function personne(){
        return $this->belongsTo(Personne::class, 'numPersonne');
    }

    public function parcelles(){
        return $this->hasMany(Parcelle::class, 'numAgriculteur');
    }
}
