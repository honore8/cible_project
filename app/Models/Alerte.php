<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerte extends Model
{
    protected $table= 'alerte';
    protected $fillable=[
        'email', 'type','frequence'
    ];

}
