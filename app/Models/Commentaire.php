<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table= 'commentaire';

    protected $fillable=['note', 'texte'];
}
