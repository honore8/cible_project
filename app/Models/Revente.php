<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revente extends Model
{
    
    public function vendeur()
    {
        return $this->belongsTo('App\Models\User','revendeur_id');
    }

    public function acheteur()
    {
        return $this->belongsTo('App\Models\User','acheteur_id');

    }

    public function tickets()
    {
        return $this->BelongsToMany('App\Models\Ticket')->withPivot(['nombre', 'prix']);
    }
}
