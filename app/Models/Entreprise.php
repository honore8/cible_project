<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $table= 'entreprise';
    protected $fillable = [
        'raison_sociale', 'telephone', 'ville', 'adresse','piece_jointe','activites','statut_juridique', 'num_immatriculation'
    ];
}
