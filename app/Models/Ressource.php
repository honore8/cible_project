<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ressource extends Model
{
    protected $fillable=['url_file'];
    
    public function evenement()
    {
        return $this->belongsTo('App\Models\Evenement');
    }

}
