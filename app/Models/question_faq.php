<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class question_faq extends Model
{
  protected $table= 'question_faq';
  protected $fillable= [
      'texte', 'reponse'
  ];

public function evenement()
{
    return $this->belongsTo('App\Model\Evenement');
}
}