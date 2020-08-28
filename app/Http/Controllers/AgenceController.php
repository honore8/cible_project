<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agence; 
use App\Models\Investisseur; 
use  App\Repositories\AgenceRepositoryInterface;
class AgenceController extends Controller
{

    public function _construct(AgenceRepositoryInterface $agence)
    {
            $this->agence=$agence;
    }
    public function create(Request $request)
    {
        $id= Organisateur::where('user_id', '=', auth()->user()->id);
        $validator = Validator::make($request->all(), [
            'chiffres_affaires' => 'required',
            'portefeuille' => 'required',
              'statut'=>'requiered',
            'capiatal_entreprise'=>'required',
            'acheter_investir'=>'required'
      
        ], [
                 'required'=>'Vous devez remplir ce champ',
                
    
        ]);
    
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator);
        }
        else{
            $demande= Demande_vente_investissement::create($request->all());
            $demande->associate($id);
            return view();
        }
    }

    public function find(Request $request, $id)
    {
       $demande= Demande_vente_investissement::find($id);
       
       return view();
    }

    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'chiffres_affaires' => 'required',
            'portefeuille' => 'required',
              'statut'=>'requiered',
            'capiatal_entreprise'=>'required',
            'acheter_investir'=>'required'
      
        ], [
                 'required'=>'Vous devez remplir ce champ',
                
    
        ]);
    
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator);
        }
        else{
            $demande= Demande_vente_investissement::find($id);
            $demande->update($request->all());
            $demande->save(); 
            return view();
        }
    }


        public function delete($id)
        {
            Demande_vente_investissement::delete($id);
            return back();
        }
//affiche toutes les annonces a linvestisseur
        public function all(AgenceRepositoryInterface $agence)
              {
               $investisseur= Investisseur::find('user_id', auth()-> user());
               
                 $agences=  $this->agence->all($investisseur->type, $investisseur->specialites, $investisseur->age);
                                     
            return view ();
        }

        public function myDemands()
        {
            $id = Organisateur::where('user_id', '=', auth()->user()->id);
            return  Demande_vente_investissement::where('organisateur_id', '=', $id)
                ;
        }

        public function agences()
        {
            $agences = Agence::find('type','=','professionnel');
            return $agences;
        }

        public function contacter($email)
        {

        }
                                                                                                              
    }

