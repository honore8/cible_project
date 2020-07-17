<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question_faq extends Model
{
  protected $table= 'question_faq';
  protected $fillable= [
      'texte', 'reponse'
  ];
}
