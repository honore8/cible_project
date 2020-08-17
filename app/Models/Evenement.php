<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evenement extends Model 
{

    protected $table = 'evenements';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('type_event', 'description', 'pays', 'adresse');

    public function tickets()
    {
        return $this->hasMany('Ticket');
    }

    public function organisateur()
    {
        return $this->belongsTo('Organisateur');
    }

    public function prestataires()
    {
        return $this->belongsToMany('Prestataire');
    }

    public function jobers()
    {
        return $this->belongsToMany('Jober');
    }

    public function sondage()
    {
        return $this->hasOne('Sondage');
    }

    public function annonces(){
    
        return $this->hasMany('Annonce');
    }

    public function sponsors()
    {
        return $this->belongsToMany('Sponsor');
    }

    public function demande_de_sponsorings()
    {
        return $this->hasMany('Demande_de_sponsoring');
    }

    public function transfert()
    {
        return $this->hasOne('Transfert');
    }
     public function ressources()
     {
         return $this->hasMany('App\Models\Ressources');
     }

     public function objets()
    {
        return $this->hasMany('App\Models\Objet');
    }

    public function achats()
    {
        return $this->hasManyThrough('App\Models\Achat', 'App\Models\Ticket');
    }
}