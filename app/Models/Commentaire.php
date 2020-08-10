<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Commentaire extends Model
{
    protected $table='commentaire';
    protected $filable = [
        'note', 'texte'
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }

}
