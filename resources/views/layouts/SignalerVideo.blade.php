@php
    $Var = "Signaler";
@endphp
@extends('layout')
@section('content')
<br><br>  
<div class="container mb-5 ">
    <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                    <div class="card">
                            <div class="card-header h2 test" style="background-color: #020e49">Renouvellement du mot de passe</div>

                            <div class="card-body">
                                    <form class="form-inline">
                                        <div class="form-group   ">
                                            <label for="text" class="col-sm-6 col-form-label"><b>Commentaire</b></label>
                                            <div class="col-sm-6">
                                                <textarea name="" id="text" class="form-control"></textarea>
                                            </div>
                                          </div> 
                                          <div class="form-group m-5 ">
                                            <button type="submit" class="btn btn-primary mb-2" style="background-color: #020e49 ; border-color: #020e49">Signaler</button>
                                            </div>
                                      </form>
                                      <div class="card-action">
                                        <p class="top"><a href="{{url('Renouveller')}}">Apres renouvellement</a></p>
                                      </div>
                            </div>
                    </div>
            </div>
    </div>
</div>
      @endsection