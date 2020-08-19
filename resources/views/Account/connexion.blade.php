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
                      
                      <form class="user"method="POST" action="{{ route('login') }}">

                        @csrf
                        <div class="form-group">
                          <input type="email"  placeholder='Email' type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"  placeholder="Mot de passe" name="password" required autocomplete="current-password">
@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                        </div>                  
                   
                        <div class="form-group">
                          <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck"> 
                            {{ __('Se Souvenir') }}
                          </label>
                          </div>
                        </div>
                   
                        <button type="submit" class="btn btn-primary btn-user btn-block " style="background-color: #020e49 ; border-color: #020e49">
                                    {{ __('Se connecter') }}
                                </button>
                      
                   
                      </form>
                      <hr>
                      <hr>
                      <div class="text-center">
                        <a class="small" href="{{ route('password.request') }}">
                          Mot de passe oublié?</a>
                      </div>
                      <!--<div class="text-center">
                        <a class="small" href="{{url('inscription')}}">
                          Créer un compte!</a>
                      </div>-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
    
        </div>
    
      </div>

      @endsection