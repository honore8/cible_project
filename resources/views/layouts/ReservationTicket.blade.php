@php
    $Var = "Reserver un ticket";
@endphp
@extends('layouts.model-participants-account')
@section('content_1')
<br><br>  
<div class="container mb-5 ">
    <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                    <div class="card">
                            <div class="card-header h2 test" style="background-color: #020e49">Reserver un ticket</div>

                            <div class="card-body">
                                    <form method="" action="">
                                            @csrf                                   
                                            <div class="form-group row">
                                                    <label for="email" class="col-md-3 col-form-label text-md-right">Nom</label>
                                                    <div class="col-sm-9">
                                                        <input type="name" class="form-control" id="nom">
                                                    </div> 
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-md-3 col-form-label text-md-right">Prenom</label>
                                                <div class="col-sm-9">
                                                    <input type="name" class="form-control" id="nom">
                                                </div> 
                                            </div>
                                            <div class="form-group row">
                                                    <label for="password" class="col-md-3 col-form-label text-md-right">Telephone</label>
                                                    <div class="col-sm-9">
                                                        <input type="tel" class="form-control" id="nom">
                                                    </div> 
                                            </div>
                                            <div class="form-group row">
                                                <label for="password" class="col-md-3 col-form-label text-md-right">Quartier</label>
                                                <div class="col-sm-9">
                                                    <input type="tel" class="form-control" id="nom">
                                                </div> 
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <label class="input-group-text" for="inputGroupSelect01">Type d'evenement</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                  <option selected>Choisir...</option>
                                                  <option value="1">Formation (conférences, forums, colloques, séminaires, symposiums, conventions)</option>
                                                  <option value="2">Formation (Formations)</option>
                                                  <option value="3">Evènement grand public distraction (Concert, Comédie)</option>
                                                  <option value="3">Evènement grand public distraction (Sport)</option>
                                                  <option value="3">Evènement grand public distraction (Miss, défilé de mode)</option>
                                                  <option value="3">Evènement grand public découverte (Foire, Luxe)</option>
                                                  <option value="3">Evènement grand public découverte (Lancement officiel, salon)</option>
                                                  <option value="3">Autres (Réalité virtuelle, théâtre, cinéma)</option>
                                                </select>
                                              </div> 
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <label class="input-group-text" for="inputGroupSelect01">Les prix</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                  <option selected>Choisir...</option>
                                                  <option value="1">500</option>
                                                  <option value="2">1000</option>
                                                  <option value="3">2000</option>
                                                </select>
                                              </div>
                                              <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <label class="input-group-text" for="inputGroupSelect01">Paiement</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                  <option selected>Choisissez votre mode de payement</option>
                                                  <option value="1">Flooz</option>
                                                  <option value="2">TMoney</option>
                                                  <option value="3">Compte bancaire</option>
                                                </select>
                                              </div>                                                                              
                                            <div class="form-group row ">
                                                <div class="col-sm-12 d-flex">
                                                    <div class="mx-auto"> 
                                                      <button type="submit" class="btn btn-primary" style="background-color: #020e49 ; border-color: #020e49"><a href="{{url('menuParticipant')}}" class="test">Enregistrer</a> </button>
                                                      <button type="button" class="btn btn-secondary bg-white" data-dismiss="modal" style="border-color: #020e49; color:#020e49">Fermer</button>
                                                    </div>                  
                                                </div>                     
                                            </div>
                                    </form>
                            </div>
                    </div>
            </div>
    </div>
</div>
      @endsection