<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;


class Entreprise extends Model 
{
    

    protected $table = 'entreprises';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('raison_sociale', 'annee_creation', 'url_piece');

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}