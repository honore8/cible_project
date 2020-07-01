@php
    $Var = "Signaler";
@endphp
@extends('layouts.model-participants-account')
@section('content_1')
<br><br>  
<div class="container mb-5 ">
    <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                    <div class="card">
                            <div class="card-header h2 test" style="background-color: #020e49">Signaler la video</div>

                            <div class="card-body">
                                    <form method="" action="">
                                            @csrf
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Contenu a caractere sexuel
                                                </label>
                                              </div>
                                             <br><br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Contenu violent
                                                </label>
                                              </div>
                                              <br><br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Contenu offensant
                                                </label>
                                              </div>
                                              <br><br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Maltraitance d'enfant
                                                </label>
                                              </div>
                                              <br><br>
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Incitation au terrorisme
                                                </label>
                                              </div>
                                              <br><br>                                        
                                              <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    Non respect de mes droits
                                                </label>
                                              </div>
                                            <div class="form-group row ">
                                                <div class="col-sm-12 d-flex">
                                                    <div class="mx-auto"> 
                                                      <button type="submit" class="btn btn-primary" style="background-color: #020e49 ; border-color: #020e49"><a href="{{url('signalement')}}">Suivant</a> </button>
                                                      <button type="button" class="btn btn-secondary bg-white" data-dismiss="modal" style="border-color: #020e49; color:#020e49">Annuler</button>
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

