<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lieu;
use App\Models\Commentaire;
use App\Models\Country;
use App\Repositories\LieuRepositoryInterface;
use App\Repositories\CommentaireRepositoryInterface;



class AcceuilController extends Controller
{
protected $commentaires, $lieux;
    
    public function __construct(LieuRepositoryInterface $lieu, CommentaireRepositoryInterface $commentaire)
    {
        $this->lieu = $lieu;
        $this->commentaire= $commentaire;
    }

    public function create ()
    {
        $lieux= $this->lieu->all();
        $commentaires=Commentaire::all();
        $pays = Country::all();

    return view('welcome', ['lieux'=>$lieux, 'commentaire'=>$commentaires, 'pays'=>$pays]);

    }
    public function evenement ()
    {

        $pays = Country::all();
       
    return view('organisateurs.evenement', ['pays'=>$pays]);

    }
    public function page ()
    {

        $pays = Country::all();
       
    return view('organisateurs.page-evenement', ['pays'=>$pays]);

    }
    
    public function connexion ()
    {
        
    return view('Account.connexion');

    }
    
}
