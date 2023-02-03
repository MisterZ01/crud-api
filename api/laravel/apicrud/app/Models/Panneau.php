<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contrat;

class Panneau extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_panneau',
        'longitude',
        'latitude',
    ];

    public function contrat(){
        return $this->belongsTo(Contrat::class);
    }
}
