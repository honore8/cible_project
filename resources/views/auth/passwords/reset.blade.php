
                                       
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
                        <h1 class="h4 text-gray-900 mb-4">Reinitialiser votre mot de passe </h1>
                      </div>
                      <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="form-group">
                          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Adresse email...">
                         

@error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
                        
                        </div>
                        
                        <div class="form-group">
        

                              
                          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required  id="exampleInputPassword" placeholder="Nouveau mot de passe">
                          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div> 
                        <div class="form-group">
                    
                        <input type="password" class="form-control form-control-user"  id="password-confirm"  name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer mot de passe">
                        </div>                  
                       
                        <button type="submit" class="btn btn-primary btn-user btn-block " style="background-color: #020e49 ; border-color: #020e49">
                                    {{ __('Reinitialiser le mot de passe') }}
                                </button>
                            
                        <hr>                  
                      </form>
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
    
        </div>
    
      </div>

      @endsection