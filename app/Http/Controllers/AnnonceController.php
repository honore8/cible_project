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
        if($type==null)
        
        $type=$request->get('type');
        $annonce->store($request(all(),$type));
        return back()->with('success','Votre annonce a bien été enregistré');
        
    }
    public function allAnnonces($id)
    {
        
        $id= auth()->user()->id;
        $annonces= $this->annonce->alL();
        return view('', ['annonces'=>$annonces]);
    }
    public function update($id)
    {
      
    }
}
