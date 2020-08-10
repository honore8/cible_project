<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Sondage extends Model
{
    protected $table='sondage';


    public function evenement()
    {
        return $this->belongsTo('App\Model\Evenement');
    }
    public function type_sondage()
    {
        return $this->belongsTo('App\Model\Type_Sondage');
    }
}
