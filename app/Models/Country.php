<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model 
{

    use SoftDeletes;
    protected $table = 'countrys';
    public $timestamps = true;
    protected $fillable=['code', 'countryname', 'countrycode'];

}