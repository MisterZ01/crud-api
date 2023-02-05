<?php

namespace App\Models;
use App\Models\Contrat;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_client',
        'prenom_client',
        'email_client',
        'entreprise_client',
        'password_client'
    ];

    public function contrats(){
        return $this->hasMany(Contrat::class);
    }
}
