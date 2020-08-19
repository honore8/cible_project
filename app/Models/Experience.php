<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Experience extends Model 
{

    protected $table = 'experiences';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('taches', 'references', 'commentaire', 'url_img', 'evenement');

    public function user()
    {
        return $this->belongsTo('User');
    }

}