@php
    $Var = "Connexion";
@endphp
@extends('layout')
@section('content')

<div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
          <div class="col-xl-4 col-lg-12 col-md-5">
            <div class="card o-hidden border-0 shadow-lg my-5">
              <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row ">               
                  <div class="col-lg-12">
                    <div class="p-5">
                      <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Connectez-vous!</h1>
                      </div>
                      <form class="user">
                        <div class="form-group">
                          <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Adresse email...">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe">
                        </div>                  
                        <div class="form-group">
                          {{-- <input type="" class="form-control form-control-user" id="exampleInputType" placeholder="Profil"> --}}
                          <select name="exampleInputType" id="exampleInputType" class="form-control" style="border-radius: 20px" >
                            <option selected > Choix de profil</option>
                            <option value="Primaire">Organisateurs</option>
                            <option value="Collège">Sponsors/Partenaines</option>
                            <option value="Lycée">Investisseurs/Actionnaires</option>
                            <option value="Université">Sous-traiteurs</option>
                            <option value="Université">Extras</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck"> Se souvenir</label>
                          </div>
                        </div>
                        <a href="index.html" class="btn btn-primary btn-user btn-block " style="background-color: #020e49 ; border-color: #020e49">
                          Se connecter
                        </a>
                        <hr>
                   
                      </form>
                      <hr>
                      <div class="text-center">
                        <a class="small" href="{{url('Renouveller')}}">
                          Mot de passe oublié?</a>
                      </div>
                      <div class="text-center">
                        <a class="small" href="{{url('inscription')}}">
                          Créer un compte!</a>
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