<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transfert extends Model 
{

    protected $table = 'transferts';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function evenement()
    {
        return $this->belongsTo('Evenement');
    }

}