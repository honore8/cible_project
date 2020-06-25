<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
    <link href="fontawesome-free-5.13.0-web/css/all.min.css" rel="stylesheet">
    <!--load all styles -->
    <link rel="icon" type="image/png" href="{{url('images\favicon.png')}}">
    <link rel="stylesheet" href="{{asset('bootstrap-4.5.0-dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css\style.css')}}">
    <title>CIBLE | {{ $Var ?? ''}}</title>
</head>
<body>
    <header>
       
    </header>

    @yield('content')

 <!-- debut footer -->
 <footer>
    <div class="container-fluid fluid">
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
            <div class="col">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse in amet alias provident asperiores
                corporis
                molestias cupiditate labore delectus ipsa. Ipsa pariatur architecto quo ut culpa.
            </div>
            <div class="col-1 d-flex">
                <div class="vertical-bar mx-auto"></div>
            </div>
            <div class="col">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse in amet alias provident asperiores
                corporis
                molestias cupiditate labore delectus ipsa. Ipsa pariatur architecto quo ut culpa.
            </div>

        </div>
    </div>
</footer>

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