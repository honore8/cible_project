<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demande_vente_investissement extends Model 
{

    protected $table = 'demande_vente_investisssements';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('portefeuille', 'rememberToken', 'capital_entreprise');

    public function organisateur()
    {
        return $this->belongsTo('Organisateur');
    }

}