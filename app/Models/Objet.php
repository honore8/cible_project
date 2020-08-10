<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Objet extends Model
{
  protected $table= 'objet';

  protected $filled=['label', 'description', 'img', 'type'];

  public function evenement()
  {
      return $this->belongsTo('App\Model\Evenement');
  }
  public function user()
  {
      return $this->belongsTo('App\Model\User');
  }
}
