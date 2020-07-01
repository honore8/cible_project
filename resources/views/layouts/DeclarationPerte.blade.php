@php
    $Var = "Declaration de perte";
@endphp
@extends('layouts.model-participants-account')
@section('content_1')
<br><br>  
<div class="container mb-5 ">
    <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                    <div class="card">
                            <div class="card-header h2 test" style="background-color: #020e49">Déclaration de perte</div>

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
                                                <label for="password" class="col-md-3 col-form-label text-md-right">Description</label>
                                                <div class="col-sm-9">
                                                    <textarea name="" id="text" class="form-control" placeholder="Decrivez nous l'objet perdu"></textarea>
                                                </div>
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