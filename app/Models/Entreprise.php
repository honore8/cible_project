<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Entreprise extends Model
{
    protected $table= 'entreprise';
    protected $fillable = [
        'raison_sociale', 'telephone', 'ville', 'adresse','piece_jointe','activites','statut_juridique', 'num_immatriculation'
    ];

  
    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
