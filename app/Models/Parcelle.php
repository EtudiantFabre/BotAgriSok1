<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcelle extends Model
{
    use HasFactory;

    protected $fillable = ['nature', 'surface', 'localisation', 'numCulture', 'numAgriculteur'];
    protected $primaryKey='numParcelle';

    public function culture(){
        return $this->belongsTo(Culture::class, 'numCulture');
    }

    public function agriculteur(){
        return $this->belongsTo(Agriculteur::class, 'numAgriculteur');
    }
}
