<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jober extends Model 
{

    protected $table = 'jobers';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('ce_que_vous_aimez', 'cout_min', 'cout_max', 'moyen_de_deplacement');

    public function user()
    {
        return $this->belongsTo('User');
    }

    public function annonces()
    {
        return $this->belongsToMany('Annonce');
    }

    public function evenements()
    {
        return $this->belongsToMany('Evenement');
    }

}