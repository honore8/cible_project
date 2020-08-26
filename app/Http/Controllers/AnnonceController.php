<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\AnnonceRepositoryInterface;
use App\Models\Annonce;


class AnnonceController extends Controller
{

    protected $annonce;
    public function _construct(EvenementRepositoryInterface $annonce)
    {
        
        $this->middleware('auth');
        $this->annonce= $annonce;

    }
    public function store(Request $request, $type,  AnnonceRepositoryInterface $annonce)
    {
        $validator = Validator::make($request->all(), [
            'taches' => 'required',
              'cout'=>'requiered|numeric',
            'date_limite'=>'required',
            'url_charges'=>'required',
            'nbpersonnes' =>'required|numeric',
            'contact'=>'required',
            'type'=>'required',
            'dates'=>'required',
            'exigeances'=>'required',
      
        ], [
                 'required'=>'Vous devez remplir ce champ',
                'numeric'=>'Vous ne pouvez saisir que des nombres'
    
        ]);
    
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator);
        }
        else{
            if($request->url_charges)
            { $name = time().'.'.$request->url_charges->extension(); 
                $request->url_charges->move(public_path('prestataire'), $name);
             }
        
         $request->dates=implodes("|",$request->dates);
           Annonce::create($request->all());
            return view();
        }
     
    
        
    }
    public function allAnnonces($tyoe)
    {
        
       $annonces= Annnonce::where('visible', 'public')
       ->where()
        return view('', ['annonces'=>$annonces]);
    }

    public function myAnnonces($id)
    {
      
    }
    public function accepter($id)
    {
      
    }
    public function rejeter($id)
    {
      
    }
    public function supprimer($id)
    {
     
    }

    public function update($id)
    {
      
    }
}
