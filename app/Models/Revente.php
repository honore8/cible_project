<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Revente extends Model
{
    protected $table='revente';
    protected $fillable= [
        'montant'
    ];

    public function vendeur()
    {
        return $this->belongsTo('App\Model\User', 'vendeur_id');
    }
    public function acheteur()
    {
        return $this->belongsTo('App\Model\User', 'acheteur_id');
    }

    public function tickets()
    {
        return $this->hasMany('App\Model\Ticket');
    }
}
