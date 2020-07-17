<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    protected $table='evenement';
    protected $guarded=[
        'signaler'
    ];


    protected $attributes = [
        'prive' => false,
        'professionnel' => false,
        'social' => false,
        'communication' => false,
        'signaler' => false,
        'public' => false,
    ];
}
