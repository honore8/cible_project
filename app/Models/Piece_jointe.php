<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Piece_jointe extends Model
{
    protected $table='piece_jointe';

    protected $fillable=[
        'piece'
    ];
    public function evenement()
    {
        return $this->belongsToOne('App\Model\Evenement');
    }
}
