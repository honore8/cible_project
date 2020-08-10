<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Evenement extends Model
{
    protected $table='evenement';
    protected $guarded=[
        'signaler', 'user_id'
    ];


    protected $attributes = [
        'prive' => false,
        'professionnel' => false,
        'social' => false,
        'communication' => false,
        'signaler' => false,
        'public' => false,
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }
    public function piece_jointes()
    {
        return $this->hasMany('App\Model\Piece_jointe');
    }
    public function question_faqs()
    {
        return $this->hasMany('App\Model\question_faq');
    }

    public function sondages()
    {
        return $this->hasMany('App\Model\Sondage');
    }

    public function users()
    {
        return $this->belongsToMany('Users')
        ->as('travailler');
    }
}
