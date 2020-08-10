<?php

namespace App;

use Illuminate\Database\Eloquent\Pivot;
use SoftDeletes;
class Contacter extends Pivot
{
   protected $table= 'contacter'; 
}
