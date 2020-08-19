<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Alerte extends Model
{
    protected $table = 'alertes';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('email', 'ville', 'pays', 'events', 'type_event');
}
