@php
    $Var = "Paiement";
@endphp
@extends('layout')
@section('content')
    <div class="container col-10  card ">
     
        <div class="col text-center" style="color: cornflowerblue">
            <h5 style="font-size: 200%;margin-top:4%"><b>Réserver un ticket</b></h5>
        </div>
        <div class="card-body">
            <form id="addblock-form" action="" method="POST" style="display: none;">
                @csrf
                <input type="hidden" name="addBloc" id="addBloc">
            </form>
            <form method="POST" action="" name="Profil" enctype='multipart/form-data'>
                @csrf
                @auth
                <div class="form-group row ">
                  <div id="nom" class="col-sm-6 ">
                      <label for="">Nom</label>
                      <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                          id="">
                  </div>
                  <div id="raison" class="col-sm-6 ">
                      <label for="">Prenom</label>
                      <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                          id="">
                  </div>
              </div>
              <div class="form-group row ">
                <div class="col-sm-6">
                  <label for="">Email</label>
                  <input type="email" class="form-control" value="" required autocomplete="" name="email"
                      style="border-radius: 20px;">
              </div>
                <div id="profession" class="col-sm-6 ">
                    <label for="">Profession</label>
                    <input type="text" value="" required autocomplete="profession" class="form-control" name="profession">
                </div>
            </div>
              <div class="form-group row">
                <div id="genre" class="col-sm-6">
                  <label for="">Genre</label><br>
                  <select value="" required autocomplete="" name="pays" id="pays"
                      style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">

                      <option value="">Choisir...</option>
                      <option value="">Masculin</option>
                      <option value="">Feminin</option>

                  </select>
              </div>
                  <div id="date" class="col-sm-6">
                      <label for="">Date de naissance</label>
                      <input type="date" class="form-control " value="naissance" required autocomplete="" name="naissance"
                          style="border-radius: 20px;">

                  </div>
       
              </div>

              <div class="form-group row">
                  <div id="pays" class="col-sm-6">
                      <label for="">Pays</label><br>
                      <select value="" required autocomplete="" name="pays" id="pays"
                          style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">

                          <option value="">Choisir...</option>
                          <option value="">Togo</option>
                          <option value="">Ghana</option>

                      </select>
                  </div>
                  <div id="ville" class="col-sm-6">
                      <label for="">Ville</label><br>
                      <select value="" required autocomplete="" name="" id="ville"
                          style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">

                          <option value="">Choisir...</option>
                          <option value="">Lome</option>
                          <option value="">Accra</option>
                      </select>
                  </div>
              </div>
                @endauth
           
{{-- Choix ticket --}}
                <div id="new">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        {{-- <div class="btn btn-secondary float-right "
                            style="margin-top:-1.8em !important; margin-right:-1.3em" onclick="supprimer()">X</div> --}}
                        <div id="reseaux">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                            
                                        <tbody>
                                          <div class="form-group row">  
                                            <div id="ticket" class="col-sm-12">
                                                <label for="">Type de ticket</label><br>
                                                <select value="" required autocomplete="" name="ticket" id="ticket"
                                                    style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">                        
                                                    <option value="">Choisir...</option>
                                                    <option value="">VIP</option>
                                                    <option value="">Adulte</option>
                                                </select>
                                            </div>
                                        </div>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </div>
                </fieldset>
                
{{-- mode de payement --}}
                
                <div id="new1">
                   
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div class="btn btn-secondary float-right "
                            style="margin-top:-1.8em !important; margin-right:-1.3em" onclick="supprimer()">X</div>
                        <div id="experience">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic1" style="width: 103%">
                                        <h5 class="text-center"> <b>Vos expériences passés </b> </h5>
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Satifaction Client
                                                </th>
                                                <th class="text-center">
                                                    Evènements
                                                </th>
                                                <th class="text-center">
                                                    Missions
                                                </th>
                                                <th class="text-center">
                                                    Années
                                                </th>
                                                <th class="text-center">
                                                    Références
                                                </th>
                                                <th class="text-center">
                                                    Commentaires
                                                </th>
                                                <th class="text-center">
                                                    Images
                                                </th>
                                                <th class="text-center"
                                                    style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='addr0' data-id="0" class="hidden">
                                                <td data-name="satisfaction">
                                                    <input type="text" name='satisfaction[]'
                                                        placeholder='% de satisfaction du client' class="form-control" />
                                                </td>
                                                <td data-name="évènement">
                                                    <input type="text" name='évènement[]' placeholder='Nom de lévènement'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="missions">
                                                    <input type="text" name='mission[]' placeholder='missions'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="annee">
                                                    <input type="date" name='annee[]' placeholder='La date de lexpérience'
                                                        class="form-control" style="border-color: cornflowerblue; border-radius: 20px"/>
                                                </td>
                                                <td data-name="référents">
                                                    <input type="text" name='référents[]' placeholder='Le/Les référents'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="commentaire">
                                                    <input type="text" name='commentaire[]' placeholder='Dites-nous en quelques lignes'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="image">
                                                    <input type="text" name='image[]' placeholder='image'
                                                        class="form-control" />
                                                </td>

                                                <td data-name="del">
                                                    <button name="del0"
                                                        class='btn btn-danger glyphicon glyphicon-remove row-remove'><span
                                                            aria-hidden="true">×</span></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <a style="color: white" id="add_row1" class="btn btn-primary float-right">Ajouter expériences</a>
                        </div>

                </div>
                </fieldset>

        </div>
 
        <div class="form-group row">
            <div class="col-sm-12" style=" text-align: center">
                <button type="submit" class="btn btn-primary bouton">Envoyer</button>
                <button type="reset" class="btn btn-secondary bouton">Annuler</button>
            </div>
        </div>
        </form>
    </div>
    </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





  



