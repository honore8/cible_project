<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sondage extends Model 
{

    protected $table = 'sondages';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('date');

    public function users()
    {
        return $this->belongsToMany('User')->withPivot([reponse1,reponse2,reponse3,reponse4, reponse5, date]);
    }

    public function evenement()
    {
        return $this->belongsTo('Evenement');
    }

}