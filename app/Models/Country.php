<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model 
{

    protected $table = 'countrys';
    public $timestamps = true;
    protected $fillable=['code', 'countryname', 'countrycode'];

}