<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question_sondage extends Model
{
    protected $table='question_sondage';

    protected $fillable= [
        'texte'
    ];
}
