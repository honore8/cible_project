<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use App\Models\Particulier;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User;
use Auth;
class ProfilController extends Controller{

public function __construct()
{
    $this->middleware('auth');
    
    
}

public function assignRole(Request $request)
 {auth()->user()->assignRole($request->session()->get('profil'));
    return redirect('/profil/home');
}


    public function index()
    {
        
        if(!(Particulier::has('user')and (Entreprise::has('user'))))
        {
        if (auth()->user()->hasrole('participant'))
         return view('profile-individu');
        else if (auth()->user()->hasrole('jobs'))
        return('profile-individu');
        else if (auth()->user()->hasrole('sous-traiteurs'))
        return view('profile-entreprise');
        else
        return view('statut');
        }
        else {
            if ( auth()->user()->hasRole('organisateur'))
            return redirect('organisateur.menu');
            else if ( auth()->user()->hasRole('sponsor'))
            return redirect('sponsor.menu');
            else if ( auth()->user()->hasRole('participant'))
            return redirect('participant.menu');
            else if ( auth()->user()->hasRole('jobs'))
            return redirect('jobs.menu');
            else if ( auth()->user()->hasRole('sous-traiteurs'))
            return redirect('sous-traiteurs.menu');
            else if ( auth()->user()->hasRole('investisseur'))
            return redirect('investisseur.menu');
       
           
        
        }
      
    }

    public function store(Request $request)
    {
        if($request->get('statut')=="entreprise")
        return view('profile-entreprise');
        else if($request->get('statut')=="individu")
        return view ('profile-individu');
    }

   
    public function storeEntrprise(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'raison' => 'required|alpha',
            'activite' => 'required|string',
            'telephone'=>'numeric',
            'num'=>'required|alpha'
        ], [
                 'required'=>'Vous devez remplir ce champ',
                 'string'=>'Vous ne pouvez saisir que des lettres',
                 'numeric'=>'Vous ne pouvez saisir que des nombres'

        ]);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator);
        }
        else{
         $entreprise= Entreprise::create($request->all());
          $entreprise->associate(auth()->user());
        }
    }
    public function storePersonne(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'profession'=>'required|string',
            'date_nais'=> 'required',
            'pays'=> 'required',
            'ville'=> 'required',
            'piece_jointe'=> 'required'
        ], [
            'required'=>'Vous devez remplir ce champ',
            'string'=>'Vous ne pouvez saisir que des lettres',
        
        ]);
        
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator);
        }
        else{
         $personne= Particulier::create($request->all());
          $personne->associate(auth()->user());
        }

    }
}
