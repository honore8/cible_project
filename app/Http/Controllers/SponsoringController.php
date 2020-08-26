<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evenement;
use App\Models\Demande_de_sponsoring;

class SponsoringController extends Controller
{

public function _construct(EvenementReppositoryInterface $evt)

{
    $this->evt=$evt; 
}
 public function store(Request $request, $id )
 {

///validations

        $demande=Demande_de_sponsoring::create($request->all());
        $demande->associate($id);
        return view();
   
             
 }

 public function update(Request $request, $id)
 {
     //condition si demande non active et sans sponsor
      $demande= Demande_de_sponsoring::find($id); 
      $demande->update($request->all());

      return redirect(); 
 }

 public function delete($id)
 {
     //condition element actif et sans sponsor
     Demande_de_sponsoring::delete($id);
     return redirect();
 }

 public function show($id)
 {
     return view('' , [''=>Demande_de_sponsoring::find($id)]);
 }

 public function cloturer($id)
 {
    $demande=Demande_de_sponsoring::find($id); 
    $demande->actif=false;
    $demande->save();        
 }
 public function all()
 {
     $id= Sponsor::where('user_id',auth()->user()->id());
     return Demande_de_Sponsoring::where('sponsor_id', $id);
 }

 public function allSponsors(EvenementRepositoryInterface $evt)
 {
    $id= Sponsor::where('user_id',auth()->user()->id());
    return $this->evt->all_sponsor();
 }

 public function Sponsoriser($id)
 {
    $evt= Evenement::find($id);
 Sponsor::where('user_id',auth()->user()->id())->evenement()->attach($id);
     $evt->sponsors()->attach(Sponsor::where('user_id',auth()->user()->id()));

     return view(); 
 }
}
