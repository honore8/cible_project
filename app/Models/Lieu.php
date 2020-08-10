<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lieu extends Model
{
 use SofDeletes;
 protected $table='lieux';
}
