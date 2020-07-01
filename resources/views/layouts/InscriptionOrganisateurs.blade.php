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
                    <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                  </div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password">
                  </div>
                </div>
                <a href="login.html" class="btn btn-primary btn-user btn-block" style="background-color: #020e49 ; border-color: #020e49">
                  S'enregistrer
                </a>
                <hr>
                
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="{{url('Renouveller')}}">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="{{url('connexion')}}">Already have an account? Login!</a>
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
                            <div class="card-header h2 test" style="background-color: #020e49">Inscrivez-vous</div>

                            <div class="card-body">
                                    <form method="" action="">
                                            @csrf
                                            <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>
                                                    <div class="col-sm-8">
                                                        <input type="name" class="form-control" id="nom">
                                                      </div>             
                                            </div>

                                            <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right">Prenom</label>
                                                    <div class="col-sm-8">
                                                        <input type="name" class="form-control" id="nom">
                                                    </div> 
                                            </div>

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
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">Confirmer mot de passe</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" id="nom">
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
                            </div>
                    </div>
            </div>
    </div>
</div> --}}

      @endsection