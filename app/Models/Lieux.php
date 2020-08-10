<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Lieux extends Model
{
    protected $fillable= ['pays'];

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
}
