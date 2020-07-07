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
                        <h1 class="h4 text-gray-900 mb-4">Modification</h1>
                      </div>
                      <form class="user">
                        <div class="form-group">
                          <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Adresse email...">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Ancien mot de passe">
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Nouveau mot de passe">
                        </div> 
                        <div class="form-group">
                          <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Confirmer mot de passe">
                        </div>                  
                        <a href="" class="btn btn-primary btn-user btn-block " style="background-color: #020e49 ; border-color: #020e49">
                          Modifier le mot de passe
                        </a>
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