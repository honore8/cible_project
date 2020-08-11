<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Achat extends Model
{
    protected $table= 'achat';


    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    public function ticket()
    {
        return $this->belongsToMany('App\Model\Ticket');
    }
 
}
