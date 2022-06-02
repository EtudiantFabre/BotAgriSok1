<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
    use HasFactory;

    protected $fillable = ['nomCulture', 'rendement', 'densiteSemestre', 'frequenceArrosage'];
    protected $primaryKey = 'numCulture';

    public function propositions(){
        return $this->hasMany(Proposition::class, 'numCulture');
    }

    public function parcelles(){
        return $this->hasMany(Parcelle::class, 'numCulture');
    }
}
