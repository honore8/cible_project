<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EvenementRepositoryInterface;

class EvenementController extends Controller
{

    protected $evenement;
    public function _construct(EvenementRepositoryInterface $evenement)
    {
        
        $this->middleware('auth');
        $this->evenement= $evenement;

    }
    public function store(Request $request)
    {
        $date_deb=new Datetime();
        $date_fin=new Datetime();
        $id= auth()->user()->id;
        $datedeb=$request->get('date_deb');
        $datefin=$request->get('date_fin');
        $heuredeb=$request->get('heure_deb');
        $heurefin=$request->get('heure_fin');
        $date_deb->setDate($datedeb);
        $date_deb->setTime($heuredeb);
        if($date_fin)
        {
        $date_fin->setDate($datefin);
        $date_fin->setTime($heurefin);
        }
        //check social ou professionnel
        $evenement->store($request->all(), $id, $ocial, $pro);
  return redirect()->back()->with('success', 'Evenement créé avec succès. Vous pouvez desormais le retrouvez dans la liste de vos evenements');

 
    }
    public function allEvenements($id){
        
        $id= auth()->user()->id;
        return $this->evenement->all($id);
    }

}
