<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function demandeurs()
    {
        return $this->belongsToMany('App\Models\Demandeur');
    }
    public function entreprise()
    {
        return $this->belongsTo('App\Model\Entreprise');
    }
    public function evenement()
    {
        return $this->hasMany('App\Model\Evenement');
    }
    public function lieu()
    {
        return $this->hasOne('App\Model\Lieux');
    }
    public function messages()
    {
        return $this->hasMany('App\Model\Message');
    }
    public function notes()
    {
        return $this->hasMany('App\Model\Note');
    }
    public function evenements()
    {
        return $this->hasMany('App\Model\Evenement');
    }
    public function objets()
    {
        return $this->hasMany('App\Model\Objet');
    }
    public function personne()
    {
        return $this->belongsToOne('App\Models\Personne');
    }
    public function annonces()
    {
        return $this->belongsToMany('App\Model\Annonce');
    }
    public function question_sondages()
    {
        return $this->belongsToMany('App\Model\Question_Sondage');
    }
 
    public function reventes()
    {
        return $this->hasMany('App\Model\Revente');
    }
}
