<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Achat extends Model
{
    protected $table= 'achat';


    public function tickets()
    {
        return $this->hasMany('App\Model\Ticket');
    }
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    public function evenement()
    {
        return $this->belongsTo('App\Model\Evenement');
    }
 
}
