<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agronomme extends Personne
{
    use HasFactory;

    protected $fillable=['nom', 'prenom', 'tel', 'niveauEtude', 'numPersonne'];
    protected $primaryKey = 'numAgronomme';

    public function personne(){
        return $this->belongsTo(Personne::class, 'numPersonne');
    }

    public function propositions(){
        return $this->hasMany(Proposition::class, 'numAgronomme');
    }
}
