<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Investisseur extends Model 
{

    protected $table = 'investisseurs';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('critere_age', 'acheter_investir');

    public function user()
    {
        return $this->belongsTo('User');
    }

}