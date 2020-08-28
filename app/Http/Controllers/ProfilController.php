<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;
use App\Models\Particulier;
use Spatie\Permission\Traits\HasRoles;
use App\Models\User;
use App\Models\Organisateur;
use App\Models\Equipe;
use Validator;
use Auth;
class ProfilController extends Controller{

public function __construct()
{
    $this->middleware('auth');
    
    
}

public function assignRole(Request $request)

 {
     if(auth()->user()->assignRole($request->session()->get('profil')))
    return redirect('/profil/home');
    else 
abort(404);
}

    public function index()
    {
      
        $id= auth()->user();
        if((Particulier::where('user_id', '=', $id)) or (Entreprise::where('user_id', '=', $id)))
        {          
        
            if ( auth()->user()->hasRole('organisateur'))
            return redirect('menu');
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
        else {
            if (auth()->user()->hasrole('participant'))
         return view('profile-individu');
        else if (auth()->user()->hasrole('jobs'))
        return('profile-individu');
        else if (auth()->user()->hasrole('sous-traiteurs'))
        return view('profile-entreprise');
        else if ( auth()->user()->hasRole('organisateur'))
        return view('organisateurs.profile-organisateurs');
        else if ( auth()->user()->hasRole('sponsor'))
        return redirect('sponsor.menu');
        else if ( auth()->user()->hasRole('sous-traiteurs'))
            return redirect('sous-traiteurs.menu');
            else if ( auth()->user()->hasRole('investisseur'))
            return redirect('investisseur.menu');
       
           
           
        
        }
      
    }

    public function store(Request $request)
    {
        
        if($request->statut=="individu")
        {
        
             return  $this->storePersonne($request);
        }
        else if($request->statut="entreprise")
        return  $this->storeEntreprise($request);
    }
    

   
    public function storeEntreprise(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'raison_sociale' => 'required|alpha',
            'activite' => 'required|string',
              'annee_creation'=>'requiered|date',
            'url_piece'=>'required',
      
        ], [
                 'required'=>'Vous devez remplir ce champ',
                 'string'=>'Vous ne pouvez saisir que des lettres',
                 'date'=>'La date sasise n\'est pas valide'

        ]);

        if ($validator->fails()) {
         
            return back()
                        ->withErrors($validator);
        }
        else{
         $entreprise= Entreprise::create($request->all());
          $entreprise->associate(auth()->user());
         return redirect('profil/user_store');
       
        }
    }
    public function storePersonne(Request $request)
    {
       //dd($request);
  
        $validator = Validator::make($request->all(), [
            'nom'=>'required|string',
            'prenom'=>'required|string',
            'profession'=>'required|string',
            'date_nais'=> 'required',
            'genre'=>'required',
            'telephone'=>'required',
            'adresse'=>'required',
            
           
        ], [
            'required'=>'Vous devez remplir :attribute',
            'string'=>'Vous ne pouvez saisir que des lettres :attribute',
        
        ]);
        
        if ($validator->fails()) {
          
            return back()
                        ->withErrors($validator);
        }
        else{
            if(!$request->piece)
            {
                return back()
                ->withErrors($validator);
            }
         
     auth()->user()->particulier()->create($request->all());
      
          return $this->redirect($request);
        }
    }

         public function redirect(Request $request){

            if ( auth()->user()->hasRole('organisateur'))
          {
              $organisateur= new Organisateur();
                
              $organisateur->reseaux_sociaux=implode('|', $request->reseaux_sociaux);
              $organisateur->methode_de_travail=$request->methode_de_travail;
              $organisateur->url_image=$request->url_image;
              $organisateur->pourquoi_vous=$request->pourquoi_vous;
              $organisateur->materiel=$request->materiel;
              $organisateur->user_id=auth()->user()->id;
              $organisateur->save();
              
                   $i=0;
           
                for($i=0; $i<count($request->nom_equipe);$i++)
                {
                    $equipe['nom']=$request->nom_equipe[$i];
                    $equipe['prenom']=$request->prenom_equipe[$i];
                    $equipe['titre']=$request->titre[$i];
                    $equipe['annee_experience']=$request->annee[$i];
                
                    Organisateur::where('user_id', auth()->user()->id)->first()->equipes()->create($equipe);
         
            
                }
                   
                for($i; $i<count($request->satisfaction);$i++)
                {
                    dd($request);
                    $exp= Experience::create($request->satisfaction[$i],$request->mission[$i], $request->references[$i],$request->commentaire[$i], $request->image[$i]);
                    if($request->image{$i})
                    {
                             
                          $name = time().'.'.$request->file->extension(); 
                          $request->file->move(public_path('images'),     $name);
      
                    }

                    $organisateur->equipes()->save($exp);
                }


          
                return redirect('liste');
            
            }
            else if ( auth()->user()->hasRole('sponsor'))
            {

                 $sponsor= new Sponsor();
                 $sponsor->lieux= implode('|', $request->lieux);
                 $sponsor->categorie_event= implode('|', $request->categorie_event);
                 $sponsor->type_event=$request->type;
                 $sponsor->save();

                return redirect('profil/sponsor');

            }
          
            else if ( auth()->user()->hasRole('jobs'))
            {

                $job= new Jober();
                $job->jobs= implode('|', $request->jobs);
                $job->ce_que_vous_aimez=$request->aimer;
                $job->ce_que_vous_n_aimez_pas= $request->$pas_aimer;
                $job->cout_min=$request->min;
                $job->cout_max=$request->max;
                $job->moyen_de_deplacement=$request->deplacer;
                $job->handicap=$request->handicap;
                $job->save();

                for($i; i<count($request->event);$i++)
                {
                    $exp=Experience::create($request->taux_client[i],$request->taches[i], $request->references[i],$request->commentaire[i], $request->url_img[i]);
                    if($request->url_img{i})
                    {
                             
                          $name = time().'.'.$request->file->extension(); 
                          $request->file->move(public_path('images'),     $name);
      
                    }
                    $job->experience->save($exp);
                }

             

                return redirect('profil/jober');
            }
           
            else if ( auth()->user()->hasole('sous-traiteurs'))
            {
                    $prestataire= new Prestataire();
                     $prestataire->reseaux_sociaux[]=implode('|', $request->sociaux);
                     $prestaire->materiel=$request->$request->materiel;
                     $prestataire->save();

                     for($i; i<count($request->nom_equipe);$i++)
                     {
                         $eq= Equipe::create($request->nom_equipe[i],$request->prenom_equipe[i], $request->titre[i],$request->experience[i]);
                         $prestataire->equipes()->save($eq);
                     }
            
            return redirect('profil/sous-traiteurs');
                    }
            else if ( auth()->user()->hasRole('investisseur'))
            {
                  $inveesstisseur= new Investisseur();
                  $investisseur->acheter_invesstisser=$request->acheter_investir;
                  $inveesstisseur->critere_age=$request->critere_age;
                  $investisseur->Specialites= implode('|',$request->specialites);

                  $investisseur->save();

                return redirect('profil/investisseur');
            }
          

            else if ( auth()->user()->hasRole('participant'))
                return redirect('profil/participant');
            
         }
         

    public  function complete_user(Request $request)
    {
      $user = auth()->user();
      $user->critere_pays= implode('|', $request->critere_pays);
      $user->categorie_event= implode('|', $request->categorie_event);
      $user->type_event=$request->type;
      $user->ville= $request->ville;
      $user->pays= $request->pays ;
      $user->telephone= $request->telephone ;
      $user->save();
      return redirect('profil/redirect');

    }

    public function findOrganiateur(Request $request, $id)
    {
         $organisateur= Organisateur::find($id);
         $equipes= $organisateur->equipes;
         $experiences=$prganisateur->experience;
         $valeurs=  explode('|', $organisateur->explode());

         return view ('',[
             'organisateur'=>$organisateur,
             'equipes'=>$equipes,
             'experiences'=>$experiences,
        'valeurs'=>$valeurs
         ]);
    }

    public function findSponsor(Request $request, $id)
    {
        $sponsor= Sponsor::find($id);
        $lieux= explode('|',$sponsor->lieux);
        $categories= explodes('|', $sponsor->categorie_event);

        return view ('', [
            'sponsor'=>$sponsor,
            'lieux'=>$lieux,
            'categories'=>$categories
        ]);
    }

    public function findPrestataire(Request $request, $id)
    {
        $prestataire = Prestataire::find($id);
        $rss=  explode('|', $prestataire->reseaux_sociaux);
        $insta=$rss[0];
        $youtube= $rss[1];
        $linkedin=$rss[2];
        $twitter=$rss[3];
        $equipes= $prestataire->equipes;

        return view('',
        [
            'prestataire'=>$prestataire,
            'insta'=>$insta,
            'youtube'=>$youtube,
            'twitter'=>$twitter,
            'linkedin'=>$linkedin,
            'equipes'=>$equipes
        ]);
    }

    public function findJober(Request $request, $id)
    {
        $jober=Jober::find($id);
        $jobs= explode('|', $request->jobs);
        $experiences=$jobs->experiences;

        return view('',
        [
            'jober'=>$jober,
            'jobs'=>$jobs,
            'experiences'=>$experiences,
        ]);
        }

    public function findInvestisseur(Request $request, $id)
    {
        $investisseur= Investisseur::find($id);
        $specialites= implode('|', $request->specialites);

        return view('',
        ['investisseur'=>$investisseur,
        'specialites'=>$specialites]);  
    }
}
