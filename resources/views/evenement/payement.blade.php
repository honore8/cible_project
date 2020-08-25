@php
$Var = "Paiement";
@endphp
@extends('layout')
@section('content')
    <div class="container card disposition">
        <div class="col text-center" style="color: cornflowerblue">
            <h5 style="font-size: 200%;margin-top:4%"><b>Réserver un ticket</b></h5>
        </div>
        <div class="card-body">
            
            <form method="POST" action="" name="Profil" enctype='multipart/form-data'>
                @csrf
                <div class="form-group row ">
                    <div id="nom" class="col-sm-6 ">
                        <label for="">Nom</label>
                        <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                            id=""  style="border-radius: 20px;">
                    </div>
                    <div id="raison" class="col-sm-6 ">
                        <label for="">Prenom</label>
                        <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                            id=""  style="border-radius: 20px;">
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
                        <input type="text" value="" required autocomplete="profession" class="form-control"
                            name="profession"  style="border-radius: 20px;">
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

                {{-- Choix ticket --}}
                <div id="new">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>

                        <div class="row clearfix">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                    <div class="form-group row">
                                        <div id="ticket" class="col-sm-12">
                                            {{-- <label for="" class="text-center"><b>Type de
                                                    ticket</b></label><br> --}}
                                            <h5 class="text-center"> <b>Type de ticket </b> </h5>
                                            <select value="" required autocomplete="" name="ticket" id="ticket"
                                                style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">
                                                <option value="">Choisir...</option>
                                                <option value="">VIP</option>
                                                <option value="">Adulte</option>
                                            </select>
                                        </div>
                                    </div>

                                </table>
                            </div>
                        </div>

                </div>
                </fieldset>

                {{-- mode de payement --}}

                <fieldset style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                    <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>

                    <div id="experience">
                        <div class="row clearfix">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-bordered table-hover table-sortable" id=""
                                    style="width: 103%">
                                    <h5 class="text-center"> <b>Choisir moyen de paiement </b> </h5>                                  
                                        <div class="card-body col-10" style="margin-left: 15%">
                                            <form action="#" method="POST">
                                                @csrf
                                                <div class="form-group row ">
                                                    <div class="col-sm-2">
                                                        <a href=""><img class="mx-auto "
                                                                src="{{ asset('images/tmoney.png') }}" height="60px"> </a>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href=""><img class="mx-auto "
                                                                src="{{ asset('images/flooz.png') }}" height="60px"></a>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href=""><img class="mx-auto "
                                                                src="{{ asset('images/visa.png') }}" height="60px"></a>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href=""><img class="mx-auto "
                                                                src="{{ asset('images/paypal.png') }}" height="60px"></a>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <a href=""><img class="mx-auto "
                                                                src="{{ asset('images\Mastercard-logo.png') }}" height="60px"></a>
                                                    </div>
                                                </div>


                                            </form>
                                        </div>

                                </table>
                            </div>
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
