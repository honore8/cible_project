<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Objet extends Model
{
    use softDeletes;
    //a completer losrque les champs seront definis 
    protected $fillable=[];

    public function declarant()
    {
        return $this->belongsTo('App\Models\User', 'declarant_id');

    }

    public function evenement()
    {
        return $this->belongsTo('App\Models\Evenement');
    }
}
