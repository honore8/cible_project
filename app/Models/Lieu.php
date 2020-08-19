<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lieu extends Model 
{

    protected $table = 'lieux';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('code');

    public function users()
    {
        return $this->hasMany('User');
    }

}