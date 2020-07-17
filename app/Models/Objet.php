<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
  protected $table= 'objet';

  protected $filled=['label', 'description', 'img', 'type'];
}
