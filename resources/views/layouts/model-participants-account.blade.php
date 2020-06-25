@extends('layoutNav')
@section('content')
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
    <title>Mon Profil | CIBLE
    </title>
</head>
<body>
    <header>
        <!-- debut navbar -->
      <nav class="navbar navbar-expand-lg  shadow" style="background-color:white">
           
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
                <div class="col-lg-2 offset-lg-3 float-right">
                    <button class="btn btn-sm _btn_blue " ><a class="test" href="{{url('connexion')}}">Signaler un evenement </a></button>
                </div>
            </div> 
        
        </nav> 
        <!-- fin navbar -->
<div class="sidebar row barre">
    <div class="col-12 col-lg-2   gauche ">
            <div class="d-flex justify-content-center">
            <img src="{{url('images/avatar.png')}}" alt="Avatar" class="rounded-circle img-fluid w-50 mt-md-3"> <br>
            </div>
            <a href=""> <h5 class="text-center text-white mt-3"><span></span><span class="ml-3"></span></h5></a>
              <hr>
            <a href=""> <h5 class="text-center text-white mt-3"><span>Mon profil</span></h5></a>
            <hr>
            {{-- <a href=""
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"></a> --}}
                    <h5 class="text-center mt-3 h5 text-white">Se déconnecter</h5> 
            <form id="logout-form" action="" method="" style="display: none;">
                    @csrf
            </form>
            <hr>
            <div class="_menu">
                <ul class="d-inline justify-content-center">
                    <a href=""><li class="text-center mt-3 h5 text-white">Reserver un ticket</li></a>
                    <a href="">  <li class="text-center mt-3 h5 text-white">Declarer une perte</li> </a>                   
                    <a href=""><li class="text-center mt-3 h5 text-white">Mes historiques</li></a>
                    <a href=""><li class="text-center mt-3 h5 text-white">Sondage</li></a>
                    <a href=""><li class="text-center mt-3 h5 text-white">Quiz KP10 IS</li></a>                 
                    <a href=""><li class="text-center mt-3 h5 text-white">Boite a question</li></a>
                    <a href=""><li class="text-center mt-3 h5 text-white">Boite a question</li></a>
                    <a href=""><li class="text-center mt-3 h5 text-white">Boite a question</li></a>
                    <a href=""><li class="text-center mt-3 h5 text-white">Boite a question</li></a>
                    <a href=""><li class="text-center mt-3 h5 text-white">Boite a question</li></a>
                  </ul>
            </div>
    </div>
            <div class="col-lg-10 col-md-12 mt-1">
                    @yield('content')
            </div>
</div> 
@endsection