<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lieu;
use App\Models\Commentaire;
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
        $commentaires= $this->commentaire->all();

    return view('welcome', ['lieux'=>$lieux, 'commentaire'=>$commentaires]);

    }
    
    public function connexion ()
    {
        

    return view('Account.connexion');

    }
    
}
