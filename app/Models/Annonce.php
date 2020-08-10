<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
  protected $table='annonce';
  protected $filable = [
      'titre', 'contenu', 'type'
  ];

  public function user()
  {
      return $this->belongsTo('App\Model\User');
  }
  public function evenement()
  {
      return $this->belongsTo('App\Model\Evenement');
  }
  public function users()
    {
        return $this->belongsToMany('App\Model\User');
    }
  
}
