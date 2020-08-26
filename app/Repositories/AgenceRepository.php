<?php

namespace App\Repositories;
use App\Models\Agence;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;


class AgenceRepository implements AgenceRepositoryInterface{

    //Liste des agences correspondants aux criteres de l'investisseur
public function all($type, $specialite, $age){

  $genres=explode('|', $specialite);
              $tmps=Demande_vente_investissement::where('acheter_investir', '=', $type)
                                                  ->where('critere_age', '=', $age);
      $demandes=[];
                   foreach($tmps as $demande)
              { if(array_intersect_assoc(explode('|', $demande->specialites),$specialite))                                   
                 array_push($demandes, $demande) ;
              }                                  
          return $demandes;
      }




}