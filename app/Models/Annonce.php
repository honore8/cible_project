<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Annonce extends Model 
{

    protected $table = 'annonces';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('taches', 'date_limite', 'type');

    public function jobers()
    {
        return $this->belongsToMany('Jober');
    }

    public function prestataires()
    {
        return $this->belongsToMany('Prestataire');
    }

    public function evenement()
    {
        return $this->belongsTo('Evenement');
    }

}