<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sponsor extends Model 
{

    protected $table = 'sponsors';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('type_event', 'genre_event', 'lieux');

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function evenements()
    {
        return $this->belongsToMany('Evenement');
    }

}