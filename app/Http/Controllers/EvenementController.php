<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\EvenementRepositoryInterface;
use App\Models\Piece_jointe;
use App\Models\Organisateur;
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
        //ajouter si besoin le validator;
        $id= Organisateur::where('user_id','=',auth()->user());
for($i=o; i<$request->date.count();$i++)
array_push($dates,$request->date[i].'|'.$request->heure_deb[i].'|'.$request->heure_fin[i]);

       $request->date=implodes("|", $dates);
       $request->acteurs_principaux= implode("|", $request->acteurs_principaux);
       $request->invites_speciaux= implode("|", $request->invites_speciaux);

     if($request->image)
       { $imageName = time().'.'.$request->image->extension(); 
          $request->image->move(public_path('images'),     $imageName);
       }
    if($request->doc)
    { $name = time().'.'.$request->image->extension(); 
        $request->doc->move(public_path('documents'), $name);
     }

         $event = Evenement::create($request);
          $event->associate($id);
  return redirect()->back()->with('success', 'Evenement créé avec succès. Vous pouvez desormais le retrouvez dans la liste de vos evenements');

 
    }
    public function allEvenements($id){
        
        $id= auth()->user()->id;
        return $this->evenement->all($id);
    }

    public function joindre($id)
    {
     
      $name = time().'.'.$request->file->extension(); 
    $request->file->move(public_path('fichiers'),     $name);
    
      $piece = new PieceJointe();
      $piece->fichier= $name;
      $piece->type="ressource";
      $piece->evenement_id= $id;
      $piece->save();
        return back();
    }


    public function findEvenement(Request $request, $id)
    {
         $event = Evenement::find($id);
         $acteurs_principaux=explode('|', $request->acteurs_principaux);
         $invites_speciaux= explode('|', $request->invites_speciaux);
         $dates = explode('|')
    }
}
