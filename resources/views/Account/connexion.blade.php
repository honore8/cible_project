@extends('layout')
@section('content')
<br><br>  
<div class="container mb-5 ">
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
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">Confirmer mot de passe</label>
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
                                                      <button type="submit" class="btn btn-primary" style="background-color: #020e49 ; border-color: #020e49"><a href="{{url('menuParticipant')}}" class="test">Enregistrer</a> </button>
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
</div>
      @endsection