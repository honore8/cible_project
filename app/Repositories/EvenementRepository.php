<?php

namespace App\Repositories;
use App\Models\Evenement;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;


class EvenementRepository implements EvenementRepositoryInterface{

    //pays, genre/ type_event
    //evenement correspondant aux gouts de l<utilsateur
public function all($id, $pays, $genre, $type_event)
{


  $pays=explode('|', $pays);
  
  $types=explode('|', $type_event);
  
  
              $tmps=Evenement::where('type_event', '=', $type)
              ->where('public', true)
              ->whereNotIn('statut', 'annulé');
                                                  -
      $events=collect([]);
                   foreach($tmps as $evt)
              { if(array_intersect_assoc(explode('|', $evts->pays_event),$pays) and array_intersect_assoc(explode('|', $evts->type_event),$types))                                   
                $events-> push($evt) ;
              }                                  
         return $events;
      }


//Liste des evenements organisés par l'utilisateur
public function organised($id)
{
  $events = DB::table('evenement')
            ->where('organisateur_id', '=', $id);
    return $events;
}
public function tickets_achetes($id)
{
return Ticket::where('evenemnt_id', '=', $id)
    ->groupby('type');
}

public function all_sponsor($id)
{
  $sponsor= Sponsor::find($id);
  $evts= $this->all();
  $ids=[];
  foreach($evts as $evt)
  array_push($ids,$evt->id);
  $demandes= Demande_de_sponsoring::whereIn('evenement_id', $id);
  return $demades;
}
}