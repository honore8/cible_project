<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
  protected $table='annonce';
  protected $filable = [
      'titre', 'contenu', 'type'
  ];
}
