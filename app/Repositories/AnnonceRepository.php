<?php

namespace App\Repositories;
use App\Models\Annonce;
use Illuminate\Support\Facades\DB;


class AnnonceRepository implements AnnonceRepositoryInterface{
public function store(Array $inputs,$type)
{
    $annonce = new Annonce();
    $annonce->titre = $inputs['titre'];
    $annonce->contenu=$inputs['description'];
    $annonce->type= $type;
    $annonce->evenement_id=$inputs['evenement'];     
 
    $annonce->save();
}
public function all($id)
{
    $annonces = DB::table('annonce')
    ->where('user_id', '=', $id)
     ->and('visible','=', true);
return $annonces;
}
public function delete($id)
{
  $annonce= Annonce::find($id);
  $annonce->delete();

}
public function update($inputs,$id)
{
 
  $annonce= Annonce::find($id);
  $annonce->titre = $inputs['titre'];
  $annonce->contenu=$inputs['description'];
  $annonce->type= $type;
  $annonce->evenement_id=$inputs['evenement'];

  $annonce->save();
  

}
}
