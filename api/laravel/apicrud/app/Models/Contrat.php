<?php

namespace App\Models;
use App\Models\Client;
use App\Models\Panneau;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_contrat',
        'dateDebut',
        'dateFin',
        'client_id'

    ];
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function panneaus(){
        return $this->hasMany(Panneau::class);
    }

}
