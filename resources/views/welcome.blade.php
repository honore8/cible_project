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
                    <a href="{{url('inscriptionOrgani')}}" class="btn btn-primary custom-btn btn-sm float-right text-white">Créer</a>
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
                    <a href="#" class="btn btn-primary custom-btn btn-sm float-right text-white">Trouver</a>
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
                    <a href="#" class="btn btn-primary custom-btn btn-sm float-right text-white">S'inscrire</a>
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
                    <a href="#" class="btn btn-primary custom-btn btn-sm float-right text-white">S'inscrire</a>
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
                    <a href="#" class="btn btn-primary custom-btn btn-sm float-right text-white">S'inscrire</a>
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
                            Grand favori de la plateforme, vous recevrez les demandes d’investissement selon vos exigences : faire un prêt,acheter des actions, acheter une boite etc...                                                   
                        <button class="btn btn-link" id="voir-plus7">Voir plus</button> 
                        </span>
                        <span id="card7" style="display: none">
                             
                            Cliquez sur <b>S’INSCRIRE</b> et ne manquez plus d’opportunités ; nous vous les offrons avec un réel plaisir.
                        <button class="btn btn-link" id="voir-moins7">Voir moins</button>
                        </span>
                    </p>          
                    <a href="#" class="btn btn-primary custom-btn btn-sm float-right text-white">S'inscrire</a>
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
                            Cliquez sur <b>RECEVOIR</b> et remplissez ce formulaire et nous vous enverrons juste ce que vous voulez recevoir dans votre boite mail à la fréquence que vous  
                                                                                
                        <button class="btn btn-link" id="voir-plus8">Voir plus</button> 
                        </span>
                        <span id="card8" style="display: none">
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
                        et ceci par secteur ; le nombre de sous-traiteurs par secteur, le nombre de sponsors et de projets sponsorisés,la somme  
                        
                        <button class="btn btn-link" id="voir-plus9">Voir plus</button> 
                        </span>
                        <span id="card9" style="display: none">
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
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #020e49">
              <h5 class="modal-title text-white text-center">Alerte</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
              </button>
            </div> 
            <div class="modal-body">
              {{-- <p>Modal body text goes here.</p> --}}
              <form action="">
                <form>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label "><b>Prenom</i></b></label>
                        {{-- <label for="nom" class="col-sm-2 col-form-label "><b><i class="fad fa-mobile float-right"></i></b></label> --}}
                        <div class="col-sm-10">
                          <input type="tel" class="form-control" id="nom">
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-2 col-form-label"><b>Email</b></label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group row">
                        <label for="text" class="col-sm-3 col-form-label"><b>Commentaire</b></label>
                        <div class="col-sm-9">
                            <textarea name="" id="text" class="form-control" placeholder="Dites-nous quels type d'annonce vous-voulez recevoir"></textarea>
                        </div>
                      </div> 
                      <div>
                        <label>
                            <input type="checkbox" checked="checked" name="subscribe"> Alerte journalier
                        </label>
                      </div>
                     
                    <div class="form-group row ">
                      <div class="col-sm-12 d-flex">
                          <div class="mx-auto"> 
                            <button type="submit" class="btn btn-primary" style="background-color: #020e49 ; border-color: #020e49">Enregistrer</button>
                            <button type="button" class="btn btn-secondary bg-white" data-dismiss="modal" style="border-color: #020e49; color:#020e49">Fermer</button>
                          </div>                       
                      </div>                     
                    </div>
                  
                  </form>
              </form>
            </div>
          </div>
        </div>
      </div>

    <!-- debut quatrieme groupe de card -->
    <div class="row row-cols-1 row-cols-md-4">
        <!-- block a dupliquer -->
        <div class="col mb-3">
            <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                <div class="card-body p-3">
                    <h5 class="card-title mb-1">
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        Abalo Yao
                    </h5>
                    <div class="row mb-3">
                        <span class="col text-left custom-card-date">01/01/2020</span>
                        <span class="col text-right custom-card-date">Lomé,Togo</span>
                    </div>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                <div class="card-body p-3">
                    <h5 class="card-title mb-1">
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        Abalo Yao
                    </h5>
                    <div class="row mb-3">
                        <span class="col text-left custom-card-date">01/01/2020</span>
                        <span class="col text-right custom-card-date">Lomé,Togo</span>
                    </div>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                <div class="card-body p-3">
                    <h5 class="card-title mb-1">
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        Abalo Yao
                    </h5>
                    <div class="row mb-3">
                        <span class="col text-left custom-card-date">01/01/2020</span>
                        <span class="col text-right custom-card-date">Lomé,Togo</span>
                    </div>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                <div class="card-body p-3">
                    <h5 class="card-title mb-1">
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                        Abalo Yao
                    </h5>
                    <div class="row mb-3">
                        <span class="col text-left custom-card-date">01/01/2020</span>
                        <span class="col text-right custom-card-date">
                            Lomé,Togo</span>
                    </div>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>
            </div>
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