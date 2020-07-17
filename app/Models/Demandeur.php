<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demandeur extends Model
{
    protected $table= 'demandeur';
    protected $fillable = ['email'];
    
}
