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
                          <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <div class="custom-control custom-checkbox small">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                          </div>
                        </div>
                        <a href="index.html" class="btn btn-primary btn-user btn-block " style="background-color: #020e49 ; border-color: #020e49">
                          Se connecter
                        </a>
                        <hr>
                   
                      </form>
                      <hr>
                      <div class="text-center">
                        <a class="small" href="{{url('Renouveller')}}">Forgot Password?</a>
                      </div>
                      <div class="text-center">
                        <a class="small" href="{{url('inscriptionOrgani')}}">Create an Account!</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    
          </div>
    
        </div>
    
      </div>
{{-- <div class="container mb-5 ">
    <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                    <div class="card">
                            <div class="card-header h2 test" style="background-color: #020e49">Connectez-vous</div>

                            <div class="card-body">
                                    <form method="" action="">
                                            @csrf                                   
                                            <div class="form-group row">
                                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                                    <div class="col-sm-8">
                                                        <input type="name" class="form-control" id="nom">
                                                    </div> 
                                            </div>
                                            <div class="form-group row">
                                                    <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>
                                                    <div class="col-sm-8">
                                                        <input type="password" class="form-control" id="nom">
                                                    </div> 
                                            </div>
                                                                               
                                            <div class="row col s12">
                                                <label>
                                                  <input type="checkbox" name="remember" id="remember">
                                                  <span>Se rappeler de moi</span>
                                                </label>
                                              </div>
                                            <div class="form-group row ">
                                                <div class="col-sm-12 d-flex">
                                                    <div class="mx-auto"> 
                                                      <button type="submit" class="btn btn-primary" style="background-color: #020e49 ; border-color: #020e49"><a href="{{url('menu')}}" class="test">Se connecter</a> </button>
                                                      <button type="button" class="btn btn-secondary bg-white" data-dismiss="modal" style="border-color: #020e49; color:#020e49">Fermer</button>
                                                    </div>                  
                                                </div>                     
                                              </div>
                                              <div class="card-action">
                                                <p class="top"><a href="{{url('Renouvellement')}}">Mot de passe oublié ?</a></p>
                                                <p class="top"><a href="{{url('inscriptionOrgani')}}">Pas de compte ? Créez-en un</a></p>                     
                                              </div>
                                    </form>
                            </div>
                    </div>
            </div>
    </div>
</div> --}}
      @endsection