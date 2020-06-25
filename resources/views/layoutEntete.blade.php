<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
    <link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
    <!--load all styles -->
    
    <link rel="stylesheet" href="{{asset('bootstrap-4.5.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <title>CIBLE</title>
</head>
<body>
    <header>
        <nav class="" style="background-color:white">
            <div class="container-fluid">
                <div class="row pt-2 pb-2">
                    <div class="col-md-6 col-lg-2 offset-lg-2 pl-0 reseau-sociaux ">
                        <div class="">
                            <a href="https://www.facebook.com/KP10IS "><i class="fab fa-facebook fa-lg" style="color: #2962ff;"></i></a>
                            <a href="https://www.youtube.com/channel/UCZ3zjTspSoJNKmBn6KwJ4Ig?view_as=subscriber"><i class="fab fa-youtube fa-lg" style="color: #ff0000;"></i></a>
                            <a href="https://www.instagram.com/kp10is/"><i class="fab fa-instagram fa-lg" style="color: #1da1f2;"></i></a>
                            <a href=" https://www.linkedin.com/company/kp10is/?viewAsMember=true"><i class="fab fa-linkedin fa-lg" style="color: #2962ff;"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-2 col-lg-3 offset-lg-4 boutons">
                        <div class="">
                            <button class="btn _btn_blue btn-sm top-button-color"><a href="{{Url('proposdenous')}}" class="test"> A propos de</a></button>
                            <button class="btn _btn_blue btn-sm top-button-color" data-toggle="modal" data-target="#exampleModal">Nous Ecrire</button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <router-view></router-view>
        </div>
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-6 col-md-3 col-lg-2 pr-0 d-flex ">
                    <img class="mx-auto my-auto" style="max-width: 80%;" src="{{asset('images/cible.jpeg')}}"
                        alt="logo1">
                </div>
                <div class="col-6 col-md-9 col-lg-10 pl-0 pr-0 " style="background-image: url(images/image.jpeg);height: 287px;
                border-top-left-radius: 125px; border-bottom-left-radius: 115px;background-size: cover">
                    <div class="row h-100">
                        <div class="col-md-3 offset-md-7 my-auto input-search">
                            <form action="" class=" ">
                                <input type="text" placeholder="Search" class="form-control w-100 text-right ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- debut navbar -->
        <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #cfe3ff;">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse row" id="navbarNav">
                <ul class="navbar-nav col-sm-12 col-lg-4 offset-lg-3 reseau-sociaux">
                    <li class="nav-item active barre" style="display: none;">
                        <a class="nav-link" href="#">Nous contacter <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item barre" style="display: none;">
                        <a class="nav-link" href="#">A propos</a>
                      </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{Url('acceuil')}}">Acceuil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{Url('fonctionnement')}}">Fonctionnement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{Url('tarification')}}">Tarification</a>
                    </li>
                </ul>
                <div class="col-lg-2 offset-lg-3">
                    <button class="btn btn-sm _btn_blue " ><a class="test" href="{{url('connexion')}}">Connexion</a></button>
                </div>
            </div>
        </nav>
        <!-- fin navbar -->
    </header>

    @yield('content')


{{-- Modal contacter --}}
    <div class="modal " id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #020e49">
              <h5 class="modal-title text-white">Contactez-nous</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
              </button>
            </div> 
            <div class="modal-body">
              {{-- <p>Modal body text goes here.</p> --}}
              <form action="">
                <form>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-3 col-form-label"><b>Nom</b></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="prenom" class="col-sm-3 col-form-label"><b>Prenom</b></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="prenom">
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Email</b></label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-sm-3 col-form-label"><b>Commentaire</b></label>
                      <div class="col-sm-9">
                          <textarea name="" id="text" class="form-control"></textarea>
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
      {{-- Modal Connexion --}}
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

    <script src="{{asset('jquery\jquery.js')}}" integrity=""></script>
    <script src="{{asset('bootstrap-4.5.0-dist\js\bootstrap.min.js')}}" integrity=""></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script> --}}
    <script>
        $(document).ready(function(){
            if (window.innerWidth < 600) {
                $('.boutons').hide();
                $('.barre').show();
            }
        });
    </script>
</body>

</html>