<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class question_sondage extends Model
{
    protected $table='question_sondage';

    protected $fillable= [
        'texte'
    ];

    public function type_sondages()
    {
        return $this->belongsToMany('App\Models\Type_Sondage')
        ->withPivot('echelle');
    }

}
