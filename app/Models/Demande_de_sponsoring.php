<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Demande_de_sponsoring extends Model 
{

    protected $table = 'demande_sponsorings';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('avantages', 'besoins', 'date_limite', 'contact', 'beneficiaires');

    public function evenement()
    {
        return $this->belongsTo('Evenement');
    }

}