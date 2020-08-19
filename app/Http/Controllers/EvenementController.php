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

    public function media($id, $type)
    {
     
      $name = time().'.'.$request->file->extension(); 
  switch($type)
{
  case "ressource":
    $request->file->move(public_path('fichiers'),     $name);
  break;
  case "media":
    $request->file->move(public_path('images'),     $name);
  break;
}
    
    
      $piece = new PieceJointe();
      $piece->fichier= $name;
      $piece->type=$type;
      $piece->evenement_id= $id;
      $piece->save();
        return back();
    }


    public function findEvenement(Request $request, $id, TicketRepositoryInterface $ticket)
    {
         $event = Evenement::find($id);
         $acteurs_principaux=explode('|', $request->acteurs_principaux);
         $invites_speciaux= explode('|', $request->invites_speciaux);
         $dates = explode('|', $dates);

        $heure_deb=[];
        $heure_fin=[];
        $date_evt=[];
         // medias
         $tickets= $ticket->find_event();
         foreach($dates as $date)
       {
         $tmp = explode('|',$date);
         
            array_push($date_evt,$date[0]);
            array_push($heure_deb,$date[1]);
            array_push($heure_fin,$date[2]);
       }


       return view ();
    }

    public function publier_evenement($id)
    {
            $evt= Evenement::find($id);
            $evt->public=true;

            $evt->save();
            return back();
    }

    public function create_ticket(Request $request , $id)
    {
      //validations

      $validator = Validator::make($request->all(), [
        'type' => 'required|string',
        'nbpersonnes' => 'required|numeric',
          'cout'=>'requiered|numeric',
        'description'=>'string|required',
  
    ], [
             'required'=>'Vous devez remplir ce champ',
             'string'=>'Vous ne pouvez saisir que des lettres',
             'numeric'=>'Ce champ ne peut contenir que des chiffres'

    ]);

    if ($validator->fails()) {
        return back()
                    ->withErrors($validator);
    }
    else{
        $ticket= Ticket::create($request->all());
        $ticket->associate($id);
        return view();
    }
}
public function deleteEquipe($id)
{
    Equipe::delete($id);
    return back();
}

public function deleteExperience($id)
{
    Experience::delete($id);
    return back();
}
public function find_achat($id)
{
  return Evenement::find($id)->achats;
}

public function editTicket(Request $request, $id){
  $ticket= Ticket::find($id);
  $ticket->type=$request->type;
  $ticket->description->description;
  $ticket->cout=$request->cout;
  $ticket->nbpersonnes= $request->nbpersonnes;

  $ticket->save();
  return back();
  
}

public function deleteTicket(Request $request, $id){
  $ticket= Ticket::delete($id);
  
}

public function find_transfert()
{
  $id= Organisateur::where('user_id','=',auth()->user());
 return Organisateeur::find($id)->transferts;
}

public function inviter(Request $request, $id)
{

$evt=Evenement::find($id);
$subject=$evt->nom.'(invitation)';

  foreach($request->email as $email)
  
    \Mail::to($email)->send(new App\Mail\Invitation());
 
    return back()->with('success', 'Invitation reussie');
}

}
