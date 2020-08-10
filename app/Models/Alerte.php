<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Alerte extends Model
{
    protected $table= 'alerte';
    protected $fillable=[
      'type','frequence'
    ];

    public function filtres()
    {
        return $this->hasMany('App\Model\Filtres');
    }
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

}
