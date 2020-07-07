
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{url('images\favicon1.png')}}">
    <link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <!--load all styles -->
    
    <link rel="stylesheet" href="{{asset('bootstrap-4.5.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <title>CIBLE | {{ $Var ?? ''}}</title> 
</head>
<body>
    <header>
        <nav class="" style="background-color:white;">
            <div class="container-fluid">
                <div class="row pt-2 pb-2">
                  
                    <div class="col-md-6 col-lg-2 col-6 offset-3 offset-lg-2 pl-0 reseau-sociaux ">                      
                        <div class="d-flex justify-content-end justify-content-lg-start ">
                            <a class="mr-1" target="_blank" href="https://www.facebook.com/KP10IS "><i class="fab fa-facebook fa-lg" style="color: #2962ff;"></i></a>
                            <a class="mr-1" target="_blank" href="https://www.youtube.com/channel/UCZ3zjTspSoJNKmBn6KwJ4Ig?view_as=subscriber"><i class="fab fa-youtube fa-lg" style="color: #ff0000;"></i></a>
                            <a class="mr-1" target="_blank" href="https://www.instagram.com/kp10is/"><i class="fab fa-instagram fa-lg" style="color: #1da1f2;"></i></a>
                            <a  target="_blank" href=" https://www.linkedin.com/company/kp10is/?viewAsMember=true"><i class="fab fa-linkedin fa-lg" style="color: #2962ff;"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-2 col-lg-3 offset-lg-4 boutons" >
                        <div class="">
                            <button class="btn _btn_blue btn-sm top-button-color"><a href="{{Url('proposdenous')}}" class="test btn_blue"> A propos de</a></button>
                            <button class="btn _btn_blue btn-sm top-button-color btn_blue" data-toggle="modal" data-target="#exampleModal"> Nous Ecrire</button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

       

        {{-- Modal Ecrire --}}
        <div class="modal " id="exampleModal" tabindex="-1" role="dialog">
          <div class="modal-dialog modal-md">
            <div class="modal-content">
              <div class="modal-header" style="background-color: #020e49">
                <h5 class="modal-title text-white text-center">Contactez-nous!</h5>
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
                          <div class="form-group row">
                              <div class="col-sm-6 mb-3 mb-sm-0" >
                                  <input type="text" class="form-control form-control-user"  style="border-radius: 20px" id="exampleFirstName" placeholder="Nom">
                                </div>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control form-control-user"  style="border-radius: 20px" id="exampleLastName" placeholder="Prenom">
                                </div>
                          </div>
                            <div class="form-group">
                              
                              <input name="" id="text" class="form-control form-control-user"  style="border-radius: 20px" id="exampleInputPassword" 
                                placeholder="Email">
                            </div>
                            <div class="md-form">
                              <label for="form103">Votre message</label>
                              <textarea id="form103" class="md-textarea form-control" rows="5"></textarea>                              
                            </div>
                            <br>
                          <a href="" class="btn btn-primary btn-user btn-block" style="background-color: #020e49 ; border-color: #020e49">
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
      
        <div class="container-fluid" >
            <div class="row mb-2">
                <div class="col-6 col-md-3 col-lg-2" style="margin-top: 3em">
                    <a href="/"><img class="mx-auto my-auto float-right image" src="{{asset('images\cible.png')}}"
                        alt="logo1"></a>
                </div>
                <div class="col-6 col-md-9 col-lg-10 pl-0 pr-0 " style="background-image: url(images/BANNIERE_NEW.png);
                 background-size: cover; margin-top: 25px; height:207px">
                    <div class="row h-100">
                        <div class="col-md-3 offset-md-7 my-auto input-search">
                            <form action="" class=" ">
                                <input type="text" placeholder="Rechercher" class="form-control w-100 text-right ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- debut navbar -->
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #cfe3ff;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse row" id="navbarNav">
                <ul class="navbar-nav col-sm-12 col-lg-4 offset-lg-3 reseau-sociaux">
                    {{-- <li class="nav-item active barre" >
                        <button class="nav-link" data-toggle="modal" data-target="#exampleModal">Nous ecrire <span class="sr-only">(current)</span></button>
                      </li> --}}
                      
                    <li class="nav-item active">
                        <a class="nav-link .navbar-light .navbar-nav .nav-link" href="{{Url('/')}}" ><b>Acceuil</b> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link .navbar-light .navbar-nav .nav-link" href="{{Url('fonctionnement')}}"><b>Fonctionnement</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link .navbar-light .navbar-nav .nav-link" href="{{Url('tarification')}}"><b>Tarification</b></a>
                    </li>
                    <li class="nav-item barre" >
                      <a class="nav-link" href="{{Url('proposdenous')}}"><b>A propos</b> </a>
                    </li>
                    <div class="col-lg-12 offset-lg-3 d-block d-md-none">
 
  
                      <button class="btn btn-sm _btn_blue col-3" ><a class="test btn_blue" href="{{url('connexion')}}">Connexion</a></button>
                      
                        <button class="btn btn-sm _btn_blue col-3" data-toggle="modal" data-target="#exampleModal"><a class="test btn_blue" href="">Nous ecrire </a> <span class="sr-only">(current)</span></button>
                     
                    </div>
                </ul>
                <div class="col-lg-2 offset-lg-3 d-none d-md-block">             
                    <button class="btn btn-sm _btn_blue " ><a class="test btn_blue" href="{{url('connexion')}}">Connexion</a></button>
                </div>
            </div>
            {{-- petit ecran --}}
            

        </nav>
        <!-- fin navbar -->
    </header>
    @yield('content')
    <!-- debut footer -->
    <footer>
        <div class="container-fluid fluid d-none d-lg-block">
            <div class="row text-white text-center p-2" style="background-color: #020e49;">
                <div class="col ">Nous contacter au </div>
                <div class="col">Types de Ticket</div>
                <div class="col"> Lieu d'utilisation</div>
            </div>
            <div class="row text-white p-2 " style="background-color: #03177a;">
                <div class="col">
                  <div class="mt-md-0 mt-3">
                    <div id="bas">
                            <i class="fas fa-home mr-3"></i> Amadahomé à 100m du bvd du 30 Août, sur la route du cap, Lomé-TOGO
                    </div>
                    <div id="bas">
                            <i class="fas fa-envelope mr-3"></i> infos@kp10is.com
                    </div>
                    <div id="bas">
                            <i class="fas fa-phone-alt mr-3"></i> +228 91 01 59 80 / 91 01 61 47
                    </div> </div>
                </div>
                <div class="col-1 d-flex">
                    <div class="vertical-bar mx-auto"></div>
                </div>
                <div class="row">
                    <div class="form-group col-4">
                      <div>
                        <label for="">Ticket de Match</label>
                      </div>
                      <div>
                        <label for="">Ticket de conférence</label>
                      </div>
                      <div>
                        <label for="">Ticket de défilé de mode</label>
                      </div>              
                    </div>
                    <div class="form-group col-4">
                      <div>
                        <label for="">Ticket de salon</label>
                      </div>
                      <div>
                        <label for="">Ticket de théatre</label>
                      </div>
                      <div>
                        <label for="">Ticket de lancement d'un évènement</label>
                      </div>              
                    </div>
                    <div class="form-group col-4">
                      <div>
                        <label for="">Ticket de cinéma</label>
                      </div>
                      <div>
                        <label for="">Ticket de forums</label>
                      </div>
                      <div>
                        <label for="">Ticket de Match</label>
                      </div>              
                    </div>
                </div>
                <div class="col-1 d-flex">
                    <div class="vertical-bar mx-auto"></div>
                </div>
                <div class="col">

                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                    
                </div>
            </div>
        </div>

        {{-- petit ecran --}}

        <div class="container-fluid fluid d-block d-lg-none">
            <div class="row text-white text-center p-2" style="background-color: #020e49;">
              <div class="col-12 titre">Nous contacter au </div>
            </div>
            <div class="row text-white p-2 " style="background-color: #03177a;">
              <div class="col">
                <div class="mt-md-0 mt-3">
                  <div id="bas" class="txt">
                          <i class="fas fa-home mr-3 "></i> Amadahomé à 100m du bvd du 30 Août, sur la route du cap, Lomé-TOGO
                  </div>
                  <div id="bas"  class="txt">
                          <i class="fas fa-envelope mr-3"></i> infos@kp10is.com
                  </div>
                  <div id="bas"  class="txt">
                          <i class="fas fa-phone-alt mr-3"></i> +228 91 01 59 80 / 91 01 61 47
                  </div> </div>
              </div>
            </div>

            <div class="row text-white text-center p-2" style="background-color: #020e49;">
              <div class="col titre">Types de Ticket</div>
            </div>
            <div class="row text-white p-2 d-flex justify-content-around " style="background-color: #03177a;">
              <div class="row">
                <div class="form-group col-4">
                  <div  class="txt">
                    <label for="">Ticket de Match</label>
                  </div>
                  <div  class="txt">
                    <label for="">Ticket de conférence</label>
                  </div>
                  <div  class="txt">
                    <label for="">Ticket de défilé de mode</label>
                  </div>              
                </div>
                <div class="form-group col-4">
                  <div  class="txt">
                    <label for="">Ticket de salon</label>
                  </div>
                  <div  class="txt">
                    <label for="">Ticket de théatre</label>
                  </div>
                  <div  class="txt">
                    <label for="">Ticket de lancement d'un évènement</label>
                  </div>              
                </div>
                <div class="form-group col-4">
                  <div  class="txt">
                    <label for="">Ticket de cinéma</label>
                  </div>
                  <div  class="txt">
                    <label for="">Ticket de forums</label>
                  </div>
                  <div  class="txt">
                    <label for="">Ticket de Match</label>
                  </div>              
                </div>
            </div>
            </div>

            <div class="row text-white text-center p-2" style="background-color: #020e49;">
              <div class="col titre"> Lieu d'utilisation</div>
            </div>
          <div class="row text-white p-2 " style="background-color: #03177a;">
             
              <div class="col">

                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  <img src="images\drapeau-de-france-icone.png" alt="" width="40px">
                  
              </div>

          </div>
      </div>
    </footer>

      <div class="modal " id="connexionModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #020e49">
              <h5 class="modal-title text-white">Connectez-vous</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
              </button>
            </div> 
            <div class="modal-body">
              {{-- <p>Modal body text goes here.</p> --}}
              <form action="">
                <form>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-2 col-form-label "><b>Phone</i></b></label>
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
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script> --}}
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="{{asset('jquery\jquery.js')}}" integrity=""></script>
    <script src="{{asset('bootstrap-4.5.0-dist\js\bootstrap.min.js')}}" integrity=""></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script> --}}
    @yield('script')
    <script>
        $(document).ready(function(){
            
        });
    </script>
</body>

</html>