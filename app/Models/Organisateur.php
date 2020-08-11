<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organisateur extends Model 
{

    protected $table = 'organisateurs';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('pourquoi_vous');

    public function evenements()
    {
        return $this->hasMany('Evenement');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function equipes()
    {
        return $this->hasMany('Equipe');
    }

    public function demandeurs()
    {
        return $this->belongsToMany('Demandeur');
    }

    public function demande_vente_investissement()
    {
        return $this->hasMany('Demande_vente_investissement');
    }

}