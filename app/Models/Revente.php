<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revente extends Model
{
    protected $table='revente';
    protected $fillable= [
        'montant'
    ];
}
