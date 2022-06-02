<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'tel'];
    protected $primaryKey = 'numPersonne';

    public function agriculteurs(){
        return $this->hasOne(Agriculteur::class, 'numPersonne');
    }

    public function admins(){
        return $this->hasOne(Admin::class, 'numPersonne');
    }

    public function agronommes(){
        return $this->hasOne(Agronomme::class, 'numPersonne');
    }
}
