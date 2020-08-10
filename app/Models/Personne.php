<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Personne extends Model
{
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

     protected $table='personne';
    protected $guarded=['user_id'];


    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
  
}
