<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Particulier extends Model 
{

    protected $table = 'particuliers';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('nom', 'prenom', 'date_nais', 'genre', 'profession', 'situation_mat');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}