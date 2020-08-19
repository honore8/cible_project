@php
    $Var = "Acceuil";
@endphp
@extends('layout')
@section('content')
<div class="container">
    <br><br>
    <!-- debut premier groupe de card -->
    <div class="row row-cols-1 row-cols-md-3">
        <!-- block a dupliquer -->
        <div class="col mb-4">
            <div class="card custom-card">
                <div class="card-header  text-center text-white custom-card-header">Agences évènementielles</div>
                <div class="card-body">
                    <p class="card-text">
                       <span>
                        Besoin d’une agence évènementielle à laquelle confier l’organisation et la gestion de 
                        votre évènement ? Trouvez ici celle qui vous convient en termes de proximité, d’expérience, de spécialité, 
                        de coût etc. Que faire ? 
                        <button class="btn btn-link" id="voir-plus">Voir plus</button>
                       </span>
                       <span id="card1" style="display: none">
                        Cliquez sur <b>TROUVER</b> et accédez aux meilleures agences de votre milieu..
                        <button class="btn btn-link" id="voir-moins">Voir moins</button>
                       </span>
                    </p>
                    <a href="{{url('agence')}}" class="btn btn-primary custom-btn btn-sm float-right text-white">Trouver</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card custom-card">
                <div class="card-header  text-center text-white custom-card-header">Organisateurs</div>
                <div class="card-body">
                    <p class="card-text">
                        <span>
                        Êtes-vous une agence évènementielle ? Êtes-vous un particulier qui organise des évènements ? Désirez-vous gagner en visibilité, 
                        vendre vos tickets en ligne, trouver facilement vos sponsors/partenaires,
                        <button class="btn btn-link" id="voir-plus2">Voir plus</button> 
                        </span>
                        <span id="card2" style="display: none">
                            vos extras ou sous-traiteurs ? Vous pouvez aussi trouver un investisseur ou vendre votre boite via la plateforme. Ça vous tente ? Créez votre compte en cliquant sur <b>CREER.</b>
                            <button class="btn btn-link" id="voir-moins2">Voir moins</button>
                        </span>
                    </p>          
                    <a href="{{route('organisateur')}}" class="btn btn-primary custom-btn btn-sm float-right text-white">Créer</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card custom-card">
                <div class="card-header  text-center text-white custom-card-header">Evènements</div>
                <div class="card-body">
                    <p class="card-text">
                        <span>
                            Vous trouverez l’évènement que vous désirez : Sport, Concert, Comédie, Formation, Conférence, Miss, etc. 
                            Pourquoi s’ennuyer ? Pourquoi ne pas se faire former ? Cliquez sur <b>TROUVER</b> et faites-vous plaisir en achetant
                        <button class="btn btn-link" id="voir-plus3">Voir plus</button> 
                        </span>
                        <span id="card3" style="display: none">
                              votre ticket 
                            pour votre évènement coup de cœur. Vous méritez un bon plaisir ; votre compagne/compagnon aussi.
                        <button class="btn btn-link" id="voir-moins3">Voir moins</button>
                        </span>
                    </p>          
                    <a href="{{Url('reservationparticipants')}}"  class="btn btn-primary custom-btn btn-sm float-right text-white">Trouver</a>
                </div>
            </div>
        </div>
       

    </div>
    <!-- fin premier groupe de card -->
    <!-- debut deuxieme groupe de card -->
    <div class="row row-cols-1 row-cols-md-3">
        <!-- block a dupliquer -->
        <div class="col mb-4">
            <div class="card custom-card">
                <div class="card-header  text-center text-white custom-card-header">Sponsors/Partenaires</div>
                <div class="card-body">
                    <p class="card-text">
                        <span>
                        Vous êtes une entreprise ou une association et vous désirez gagner en notoriété en accompagnant 
                        des évènements… Oui nous avons pensé à vous aussi. Cliquer sur <b>S’INSCRIRE</b> et affiner vos critères de sponsoring ou
                        <button class="btn btn-link" id="voir-plus4">Voir plus</button> 
                        </span>
                        <span id="card4" style="display: none">
                             
                            de partenariat puis vous recevrez dans votre compte des demandes selon vos exigences. Sponsorisez et gagnez en notoriété. 
                            C’est un plaisir de vous servir gratuitement.
                        <button class="btn btn-link" id="voir-moins4">Voir moins</button>
                        </span>
                    </p>          
                    <a href="{{route('sponsor')}}" class="btn btn-primary custom-btn btn-sm float-right text-white">S'inscrire</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card custom-card">
                <div class="card-header  text-center text-white custom-card-header">Sous-traiteurs</div>
                <div class="card-body">
                    <p class="card-text">
                        <span>
                            Service restauration, multimédia, décoration, location, etc. 
                            Faites-vous trouver par nos agences évènementielles et gagnez des parts de marché sans rien payer.Plus vous assumez, plus vous gagnez en note et plus vous                             
                        <button class="btn btn-link" id="voir-plus5">Voir plus</button> 
                        </span>
                        <span id="card5" style="display: none">
                            avez de sollicitation pour la sous-traitance. 
                            Ça vous dit ? Inscrivez-vous en cliquant sur <b>S’INSCRIRE</b> puis recevez des dizaines de propositions chaque mois.
                        <button class="btn btn-link" id="voir-moins5">Voir moins</button>
                        </span>
                    </p>          
                    <a href="{{Url('prestataire')}}" class="btn btn-primary custom-btn btn-sm float-right text-white">S'inscrire</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card custom-card">
                <div class="card-header  text-center text-white custom-card-header">Jobs évènementiels</div>
                <div class="card-body">
                    <p class="card-text">
                        <span>
                        Etudiant ou en chômage, un cumul de petites sommes devient une somme significative qui peut vous tirer d’affaire. 
                        Ne négligez rien ; raclez tout. Cliquez sur le bouton <b>S’INSCRIRE</b> puis recevez des missions à proximité,                                                   
                        <button class="btn btn-link" id="voir-plus6">Voir plus</button> 
                        </span>
                        <span id="card6" style="display: none">
                            selon votre disponibilité et vos goûts, qui vous ferons gagner un peu de sous pendant vos temps libres. 
                            Nous sommes passés par là et sommes heureux de vous être utile.
                        <button class="btn btn-link" id="voir-moins6">Voir moins</button>
                        </span>
                    </p>          
                    <a href="{{Url('jober')}}" class="btn btn-primary custom-btn btn-sm float-right text-white">S'inscrire</a>
                </div>
            </div>
        </div>
        

    </div>
    <!-- debut troisieme groupe de card -->
    <div class="row row-cols-1 row-cols-md-3">
        <!-- block a dupliquer -->
        <div class="col mb-4">
            <div class="card custom-card">
                <div class="card-header  text-center text-white custom-card-header">Investisseurs/Actionnaires</div>
                <div class="card-body">
                    <p class="card-text">
                        <span>
                            Homme/Femme d’affaire, votre appétence à investir dans le secteur de l’évènementiel n’est pas à discuter. 
                            Grand favori de la plateforme, vous recevrez les demandes d’investissement selon vos exigences : faire un prêt,                                                   
                        <button class="btn btn-link" id="voir-plus7">Voir plus</button> 
                        </span>
                        <span id="card7" style="display: none">
                            acheter des actions,acheter une boite etc...
                            Cliquez sur <b>S’INSCRIRE</b> et ne manquez plus d’opportunités ; nous vous les offrons avec un réel plaisir.
                        <button class="btn btn-link" id="voir-moins7">Voir moins</button>
                        </span>
                    </p>          
                    <a href="{{Url('investisseur')}}" class="btn btn-primary custom-btn btn-sm float-right text-white">S'inscrire</a>
                </div>
            </div>
        </div>
        <!-- block a dupliquer -->
        <div class="col mb-4">
            <div class="card custom-card">
                <div class="card-header  text-center text-white custom-card-header">Alertes évènements</div>
                <div class="card-body">
                    <p class="card-text">
                        <span>
                            Voulez-vous manquer des évènements en or de vos artistes, coachs, comédiens (…) préférés ? Bien-sûr que non… Bingo… 
                            Cliquez sur <b>RECEVOIR</b> et remplissez ce formulaire et nous vous enverrons juste ce que vous voulez recevoir   
                                                                                
                        <button class="btn btn-link" id="voir-plus8">Voir plus</button> 
                        </span>
                        <span id="card8" style="display: none">
                            dans votre boite mail à la fréquence que vous
                            avez choisi. Vous pouvez à tout moment affiner d’avantage vos critères et nous les prendrons en compte.
                        <button class="btn btn-link" id="voir-moins8">Voir moins</button>
                        </span>
                    </p>          
                    <a href="#" class="btn btn-primary custom-btn btn-sm float-right text-white" data-toggle="modal" data-target="#alerteModal">Recevoir</a>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card custom-card">
                <div class="card-header  text-center text-white custom-card-header">chiffres clés</div>
                <div class="card-body">
                    <p class="card-text">
                        <span>
                        Une plateforme, ce sont des chiffres : le nombre d’utilisateurs, les pays d’utilisation, le nombre d’agences, le nombre d’évènements 
                        et ceci par secteur ; le nombre de sous-traiteurs par secteur,le nombre de sponsors   
                        
                        <button class="btn btn-link" id="voir-plus9">Voir plus</button> 
                        </span>
                        <span id="card9" style="display: none">
                            et de projets sponsorisés,la somme
                            totale des tickets vendus etc. Envie de lire ces chiffres ? Cliquez sur <b>VOIR</b> et profitez de nos statistiques..
                        <button class="btn btn-link" id="voir-moins9">Voir moins</button>
                        </span>
                    </p>          
                    <a href="#" class="btn btn-primary custom-btn btn-sm float-right text-white">Voir</a>
                </div>
            </div>
        </div>

    </div>
     
      {{-- Modal Alerte --}}
      <div class="modal " id="alerteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #020e49">
              <h5 class="modal-title text-white text-center">Alertes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
              </button>
            </div> 
            <div class="modal-body">
              <form action="">
                <div class="col-lg-12">
                    <div class="p-5">
                      <div class="text-center">
                      <form class="user">
                          <h3>Parlons de vos préférences!</h3>
                        <div class="form-group">                          
                            <input name="" id="text" class="form-control form-control-user"  style="border-radius: 20px" id="exampleInputPassword" 
                              placeholder="Email">
                          </div>
                          <div class="form-group">
                            <select name="exampleInputType" id="exampleInputType" class="js-example-basic-multiple form-control" multiple="multiple" style="border-radius: 20px" >
                            @foreach ($pays as $item)
                                <option value="liste">{{$item->countryname}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <select name="exampleInputType" id="exampleInputType" class="form-control" style="border-radius: 20px" >
                              <option selected > Choix de la ville</option>
                              <option value="Primaire">Lome</option>
                              <option value="Collège">Dakar</option>
                              <option value="Lycée">Cotonou</option>
                              <option value="Université">Accra</option>
                              <option value="Université">Libreville</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <select name="exampleInputType" id="exampleInputType" class="form-control" style="border-radius: 20px" >
                              <option selected > Types d'évènements</option>
                              <option value="1">Gratuit</option>
                              <option value="2">Payant</option>
                              <option value="3">Gratuit et payant</option> 
                            </select>
                          </div>
                          <div class="form-group">
                            <select name="exampleInputType" id="exampleInputType" class="form-control" style="border-radius: 20px" >
                              <option selected > Catégorie d'évènements</option>
                              <option value="1">Formation (conférences, forums, colloques, séminaires, symposiums, conventions)</option>
                              <option value="2">Formation (Formations)</option>
                              <option value="3">Evènement grand public distraction (Concert, Comédie)</option>
                              <option value="3">Evènement grand public distraction (Sport)</option>
                              <option value="3">Evènement grand public distraction (Miss, défilé de mode)</option>
                              <option value="3">Evènement grand public découverte (Foire, Luxe)</option>
                              <option value="3">Evènement grand public découverte (Lancement officiel, salon)</option>
                              <option value="3">Autres (Réalité virtuelle, théâtre, cinéma)</option>
                            </select>
                          </div>
                        
                          <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">Alerte journalier</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Alerte hebdomadaire</label>
                              </div>  
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">Alerte mensuel</label>
                              </div>            
                          </div>
                        <a href="" class="btn btn-primary btn-user btn-block" style="background-color: #020e49 ; border-color: #020e49 ">
                          Envoyez
                        </a>
                      </form>
                      </div>
                </div>
              </div>
            </form>
            </div>    
            </div>
          </div>
        </div>

    <!-- debut quatrieme groupe de card -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row row-cols-1 row-cols-md-4">
                  <!-- block a dupliquer -->
                  @foreach($commentaire as $comment)
                  <div class="col mb-3">
                      <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                          <div class="card-body p-3">
                              <h5 class="card-title mb-1">
                              @for ($i = 0; $i < $comment->note; $i++)
                              <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                              @endfor
                              
                              </h5>
                              <div class="row mb-3">
                                  <span class="col text-left custom-card-date"></span>
                                  <span class="col text-right custom-card-date"></span>
                              </div>
                              <p class="card-text">{{$comment->texte}}</p>
                          </div>
                      </div>
                  </div>  
                  @endforeach         
                      </div>
                  </div>        
              </div>
            </div>
          </div>
          
          <div class="">
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
          </div>
          <div>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
             
          </div>       
          
      </div>
      
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $("#voir-plus").click(function(){
            $("#card1").show();
            $("#voir-plus").hide();
        })
        $("#voir-moins").click(function(){
            $("#card1").hide();
            $("#voir-plus").show();
        })
        
    });
    

    $(document).ready(function(){
        $("#voir-plus2").click(function(){
            $("#card2").show();
            $("#voir-plus2").hide();
        })
        $("#voir-moins2").click(function(){
            $("#card2").hide();
            $("#voir-plus2").show();
        })       
    });

    $(document).ready(function(){
        $("#voir-plus3").click(function(){
            $("#card3").show();
            $("#voir-plus3").hide();
        })
        $("#voir-moins3").click(function(){
            $("#card3").hide();
            $("#voir-plus3").show();
        })       
    });

    $(document).ready(function(){
        $("#voir-plus4").click(function(){
            $("#card4").show();
            $("#voir-plus4").hide();
        })
        $("#voir-moins4").click(function(){
            $("#card4").hide();
            $("#voir-plus4").show();
        })       
    });

    $(document).ready(function(){
        $("#voir-plus5").click(function(){
            $("#card5").show();
            $("#voir-plus5").hide();
        })
        $("#voir-moins5").click(function(){
            $("#card5").hide();
            $("#voir-plus5").show();
        })       
    });

    $(document).ready(function(){
        $("#voir-plus6").click(function(){
            $("#card6").show();
            $("#voir-plus6").hide();
        })
        $("#voir-moins6").click(function(){
            $("#card6").hide();
            $("#voir-plus6").show();
        })       
    });

    $(document).ready(function(){
        $("#voir-plus7").click(function(){
            $("#card7").show();
            $("#voir-plus7").hide();
        })
        $("#voir-moins7").click(function(){
            $("#card7").hide();
            $("#voir-plus7").show();
        })       
    });

    $(document).ready(function(){
        $("#voir-plus8").click(function(){
            $("#card8").show();
            $("#voir-plus8").hide();
        })
        $("#voir-moins8").click(function(){
            $("#card8").hide();
            $("#voir-plus8").show();
        })       
    });

    $(document).ready(function(){
        $("#voir-plus9").click(function(){
            $("#card9").show();
            $("#voir-plus9").hide();
        })
        $("#voir-moins9").click(function(){
            $("#card9").hide();
            $("#voir-plus9").show();
        })       
    });
</script>
@endsection