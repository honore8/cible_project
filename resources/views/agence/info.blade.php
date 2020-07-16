@php
    $Var = "Plus d'information";
@endphp
@extends('layout')
@section('content')
<br><br>
<h2 class="text-center">Plus d'information sur l'agence</h2>

    <div class="container">
  
      <!-- Outer Row -->
      <div class="row justify-content-center">
  
        <div class="col-xl-10 col-lg-12 col-md-9">
  
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block bg-login-image"> </div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                    </div>
                   <h3>18 MARIGNAN</h3> 
                   <h2>Agence immobilière à Paris 8ème</h2> 
                    <br>
                       <h2>18 rue de Marignan</h2> 
                       <h2>75008 Paris 8ème</h2> 
                       <h2>Tel : Afficher le téléphone</h2> 
                       <h2><i>Ville</i></h2> 
                       <h2><i>Pays</i></h2> 
                    <hr>
                    <div class="text-center">
                      <a class="small" href="">www.18marignan.com?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="">www.18marignan.com!</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
        </div>
  
      </div>
  
    </div>
      @endsection