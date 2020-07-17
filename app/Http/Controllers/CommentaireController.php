<?php

namespace App\Http\Controllers;
use App\Models\Commentaire;
use App\Repositories\LieuRepositoryInterface;
use App\Repositories\CommentaireRepositoryInterface;

use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    protected $commentaire;
    public function _construct(CommentaireRepositoryInterface $commentaire)
    {
        if (guest()->check()) {
            return redirect('/connexion');
        }
        $this->middleware('auth');
        $this->commentaire= $commentaire;

    }

    public function store(Request $request, CommentaireRepositoryInterface $commentaire)
    {
      
            $id= auth()->user()->id;
              $commentaire->store($request->all(), $id);
        return redirect()->back()->with('success', 'Merci pour votre commentaire');
    }
    

}
