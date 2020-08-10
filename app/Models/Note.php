<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Note extends Model
{
  protected $table='note';
  protected $filled = ['note'];


  public function user()
  {
      return $this->belongsTo('App\Model\User');
  }
}
