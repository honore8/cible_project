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
              <form class="user"method="POST" action="{{ route('register') }}">
                        @csrf
         
                <div class="form-group">
                  <input id="email" placeholder="Email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" required autocomplete="email" >


                </div>                  
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
               
                    <input  id="password" type="password" placeholder="Mot de passe "class=" form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
                  <div class="col-sm-6">
                    <input  class="form-control form-control-user" id="password-confirm" type="password" placeholder="Confirmez " name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">En vous inscrivant, vous acceptez 
                      <a href="" class="text-danger">nos Conditions Générales d'Utilisation, Conditions Générales d'Organisation</a> , et déclare avoir pris connaissance de notre 
                     <a href="" class="text-danger">Politique de Confidentialité</a> 
                      </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary  btn-user btn-block" style="background-color: #020e49 ; border-color: #020e49">
                                    {{ __("S'inscrire") }}
                                </button>
                
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