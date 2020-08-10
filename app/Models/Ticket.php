<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Ticket extends Model
{
    protected $table='ticket';
    protected $guarded=['epuise', 'achat_id', 'evenement_id'];

    public function evenement()
    {
        return $this->belongsTo('App\Model\Evenement');
    }
   

}
