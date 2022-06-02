<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Personne
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'tel', 'numPersonne'];
    protected $primaryKey = 'numAdmin';

    public function personne(){
        return $this->belongsTo(Personne::class, 'numPersonne');
    }
}
