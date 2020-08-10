<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;
class Message extends Model
{
    protected $table= 'message';
    protected $filled = ['texte'];

    public function sender()
    {
        return $this->belongsTo('App\Model\User', 'sender_id');
    }
    public function receiver()
    {
        return $this->belongsTo('App\Model\User', 'receiver_id');
    }
    
}
