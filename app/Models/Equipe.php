<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipe extends Model 
{

    protected $table = 'equipes';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('nom', 'prenom', 'titre', 'annee_experience');

    public function organisateur()
    {
        return $this->belongsTo('Organisateur');
    }

}