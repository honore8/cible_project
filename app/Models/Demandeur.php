<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Demandeur extends Model
{
    protected $table= 'demandeur';
    protected $fillable = ['email'];
    
    public function users()
    {
       return $this->belongsToMany('App\Models\User');
    }
}
