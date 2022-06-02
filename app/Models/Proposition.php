<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposition extends Model
{
    use HasFactory;

    protected $fillable = ['dateProposition', 'numCulture', 'numAgronomme'];
    protected $primaryKey = 'numProposition';

    public function culture(){
        return $this->belongsTo(Culture::class, 'numCulture');
    }

    public function agronomme(){
        return $this->belongsTo(Agronomme::class, 'numAgronomme');
    }
}
