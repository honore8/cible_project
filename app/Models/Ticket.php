<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model 
{

    protected $table = 'tickets';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('type', 'cout', 'description');

    public function evenement()
    {
        return $this->belongsTo('Evenement');
    }

    public function achat()
    {
        return $this->belongsTo('Achat');
    }

    public function reventes()
    {
        return $this->belongsToMany('App\Models\Revente')->withPivot(['nombre','prix']);
    }

}