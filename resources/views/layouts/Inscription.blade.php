@php
    $Var = "Inscription";
@endphp
@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Inscrivez-vous!</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Nom">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Prenom">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirmer mot de passe">
                  </div>
                </div>
                <label for="">Votre mot de passe doit contenir au moins 6 caractères.</label>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">En vous inscrivant, vous acceptez 
                      <a href="" class="text-danger">nos Conditions Générales d'Utilisation, Conditions Générales d'Organisation</a> , et déclare avoir pris connaissance de notre 
                     <a href="" class="text-danger">Politique de Confidentialité</a> 
                      </label>
                  </div>
                </div>
                <a href="" class="btn btn-primary btn-user btn-block" style="background-color: #020e49 ; border-color: #020e49">
                  S'enregistrer
                </a>
                <hr>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="{{url('connexion')}}">
                  Vous avez déjà un compte? S'identifier!</a>
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