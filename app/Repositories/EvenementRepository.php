<?php

namespace App\Repositories;
use App\Models\Evenement;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;


class EvenementRepository implements EvenementRepositoryInterface{

    
public function all($id)
{
    $events = DB::table('evenement')
            ->where('user_id', '<>', $id);
    return $events;
}

//Liste des evenements organisés par l'utilisateur
public function organised()
{
  $events = DB::table('evenement')
            ->where('user_id', '=', $id);
    return $events;
}
public function tickets_achetes($id)
{
return Ticket::where('evenemnt_id', '=', $id)
    ->groupby('type');
}

}