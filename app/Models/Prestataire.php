<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestataire extends Model 
{

    protected $table = 'prestataires';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('reseaux_sociaux', 'materiel');

    public function evenements()
    {
        return $this->belongsToMany('Evenement');
    }

    public function annonces()
    {
        return $this->belongsToMany('Annonce');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }

}