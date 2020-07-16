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
                            <div class="card-header h2 test" style="background-color: #020e49">Sondage par rapport a un évènement</div>

                            <div class="card-body">
                                    <form method="" action="">
                                            @csrf                                   
                                           
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                  <label class="input-group-text" for="inputGroupSelect01">Avez vous aimez l'évènement?</label>
                                                </div>
                                                <select class="custom-select" id="inputGroupSelect01">
                                                  <option selected>Choisir...</option>
                                                  <option value="1">OUI</option>
                                                  <option value="2">NON</option>
                                                </select>
                                              </div>
                                              <div class="form-group row">
                                                <label for="text" class="col-sm-4 col-form-label">Pourquoi?</label>
                                                <div class="col-sm-8">
                                                    <textarea name="" id="text" class="form-control"></textarea>
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