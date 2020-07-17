<?php

namespace App\Repositories;
use App\Repositories\CommentaireRepositoryInterface;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireRepository implements CommentaireRepositoryInterface{

    public function store( $inputs, $id)
    {
       $commentaire= new Commentaire();

       $commentaire->note=$inputs['note'];
       $commentaire->texte=$inputs['texte'];
       $commentaire->user_id=$id;

       $commentaire->save();
    }

    public function all()
    {
        
        return Commentaire::all();
    }
}