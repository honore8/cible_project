<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Filtre extends Model
{
    use  SofTDeletes;
    protected $fillable= ['valeur', 'type'];

    public function alerte()
    {
        return $this->belongsTo('App\Model\Alerte');
    }
}
