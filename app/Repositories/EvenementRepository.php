<?php

namespace App\Repositories;
use App\Models\Evenement;
use Illuminate\Support\Facades\DB;


class EvenementRepository implements EvenementRepositoryInterface{
public function store(Array $inputs,$date_deb, $date_fin,$id, $social, $pro)
{

    $event= new Event();
    $event->nom=$inputs['nom'];
    $event->ville=$inputs['ville'];
    $event->pays=$inputs['pays'];
    $event->adresse=$inputs['adresse'];
    $event->date_deb=$date_deb;
    $event->date_fin=$date_fin;
    $event->categorie=$inputs['categorie'];
    $event->communication=$inputs['communication'];
    $event->description=$inputs['description'];
    $event->user_id=$id;
    $event->social=$social;
    $event->professionel=$pro;

    $event->save();

    
}
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

}