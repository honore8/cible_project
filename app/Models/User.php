<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Particulier;

class User extends Authenticatable
{
    use Notifiable;
    use hasRoles;

    protected $table = 'users';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('email', 'password', 'categorie_event', 'ville', 'pays', 'adresse');
    protected $hidden=['password', 'remember_token'];
    protected $casts = ['email_verified_at' =>'datetime'];

    public function experiences()
    {
        return $this->hasMany('Experience');
    }

    public function jober()
    {
        return $this->hasOne('Jober');
    }

    public function commentaires()
    {
        return $this->hasMany('Commentaire');
    }

    public function investisseur()
    {
        return $this->hasOne('Investisseur');
    }

    public function sondages()
    {
        return $this->belongsToMany('Sondage')->withPivot([reponse1,reponse2,reponse3,reponse4, reponse5, date]);
    }

    public function prestataire()
    {
        return $this->hasOne('Prestataire');
    }

    public function organisateur()
    {
        return $this->hasOne('App\Models\Organisateur');
    }

    public function Sponsor()
    {
        return $this->hasOne('Sponsor');
    }

    public function Lieu()
    {
        return $this->belongsTo('Lieu');
    }

    public function entreprise()
    {
        return $this->hasOne('Entreprise');
    }

    public function particulier()
    {
        return $this->hasOne('App\Models\Particulier');
    }

    public function vendre()
    {
        return $this->hasMany('App\Model\Ticket');
    }

    public function acheter()
    {
        return $this->hasMany('App\Model\Ticket');
    }
    public function envoyer()
    {
        return $this->hasMany('App\Model\Message');
    }
    public function recevoir()
    {
        return $this->hasMany('App\Model\Message');
    }

}