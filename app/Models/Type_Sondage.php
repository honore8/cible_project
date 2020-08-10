<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type_Sondage extends Model
{
    protected $table='type_sondage';

    public function question_sondages()
    {
        return $this->belongsToMany('App\Models\question_Sondage')
        ->withPivot('echelle');

    }

    public function sondages()
    {
        return $this->hasMany('App\Model\Sondage');
    }
  
}
