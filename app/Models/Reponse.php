<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
  protected $table= 'reponse';
  protected $fillable= [
        'echelle'
  ];
}
