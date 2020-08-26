@php
$Var = "Profil Sponsors";
@endphp
@extends('sponsors.sponsors-account')
@section('content-2')
<br>
    <style>
        .card-img-top {
            position: absolute;
            top: -52px;
            left: 50%;
            margin-left: -30px;
            width: 105px !important;
            height: 105px;
        }

        .card {
            margin-top: 37px;
            padding-top: 30px;
            margin-left: 9%;
            margin-bottom: 7%;
        }

    </style>
    <div class="container col-10  card ">
        <img class="card-img-top img-circle rounded-circle" src="images\avatar.png" alt="Card image cap">
        <div class="col text-center" style="color: cornflowerblue">
            <h5 style="font-size: 200%;margin-top:4%"><b>Completer votre profil</b></h5>
        </div>
        <div class="card-body">
            <form id="addblock-form" action="" method="POST" style="display: none;">
                @csrf
                <input type="hidden" name="addBloc" id="addBloc">
            </form>
            <form method="POST" action="" name="Profil" enctype='multipart/form-data'>
                @csrf
                <div class="form-group row ">
                    <div class="col-sm-6 " style="margin-top: 2.5em">
                        <input type="radio" name="type_compte" value="Particulier" onclick="afficherparticulier()" checked>
                        <label for="particulier">Particulier</label>
                        <input type="radio" name="type_compte" value="Entreprise" onclick="afficherprofessionel()"> <label
                            for="professionel">Professionel</label>
                    </div>
                    <div id="nom" class="col-sm-6 ">
                        <label for="">Votre Nom</label>
                        <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                            id="">
                    </div>
                    <div id="raison" class="col-sm-6 " style="display:none;">
                        <label for="">Raison sociale</label>
                        <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                            id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div id="prenom" class="col-sm-6">
                        <label for="prenom">Votre Prenom</label>
                        <input type="text" class="form-control " value="" required autocomplete="" name="prenom"
                            style="border-radius: 20px;">

                    </div>
                    <div id="date" class="col-sm-6">
                        <label for="">Date de naissance</label>
                        <input type="date" class="form-control " value="naissance" required autocomplete="" name="naissance"
                            style="border-radius: 20px;">
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
                    <div id="creation" class="col-sm-6" style="display:none;">
                        <label for="">Année de création</label>
                        <input type="date" class="form-control " value="annee" required autocomplete="" name="annee"
                            style="border-radius: 20px;">

                    </div>
                    <div id="adresse" class="col-sm-6">
                        <label for="">Adresse</label>
                        <input type="tel" class="form-control " value="" required autocomplete="" name="adresse"
                            style="border-radius: 20px;">
                    </div>
                </div>
                <div class="form-group row">
                    <div id="carte" class="col-sm-6 ">
                        <label for="">Joindre votre carte d'identité en pdf </label>
                        <input type="file" value="" autocomplete="plan" name="plan" id=""
                            style="width: 100%; padding: 3px;">
                    </div>
                    <div id="activite" class="col-sm-6">
                        <label for="">Secteur d'activité </label>
                        <input type="text" name="date_soumission" id=""
                            style="width: 100%; padding: 3px;border: 1px solid #ccc;border-radius: 20px;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="">Téléphone</label>
                        <input type="tel" class="form-control " value="" required autocomplete="" name="telephone"
                            style="border-radius: 20px;">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Email</label>
                        <input type="email" class="form-control" value="" required autocomplete="" name="email"
                            style="border-radius: 20px;">
                    </div>
                    <div id="ville" class="col-sm-4">
                        <label for="">Ville</label><br>
                        <select value="" required autocomplete="" name="" id="ville"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">

                            <option value="">Choisir...</option>
                            <option value="">Lome</option>
                            <option value="">Accra</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row ">
                    <div class="col-md-6 " style="margin-left:33%">
                        <label for="" style="margin-right: 6%">Type d'évènement</label>
                        <input type="radio" name="type_event" value="Gratuit" checked>
                        <label for="Gratuit">Gratuit</label>
                        <input type="radio" name="type_event" value="Payant" style="margin-left: 5%;"> <label
                            for="Payant">Payant</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div id="event" class="col-sm-6">
                        <label for="">Catégorie d'évènements</label>
                        <select name="exampleInputType" id="exampleInputType" class="form-control"
                            style="border-radius: 20px">
                            <option selected> Choisir</option>
                            <option value="1">conférences</option>
                            <option value="2">forums</option>
                            <option value="3">colloques</option>
                            <option value="4">séminaires</option>
                            <option value="5">symposiums</option>
                            <option value="6">conventions</option>
                            <option value="7">Formations</option>
                            <option value="8">Concerts</option>
                            <option value="9">Comédies</option>
                            <option value="10">Sports</option>
                            <option value="11">Miss</option>
                            <option value="12">défilé de mode</option>
                            <option value="13">Foire</option>
                            <option value="14">Luxe</option>
                            <option value="15">Lancement officiel</option>
                            <option value="16">salon</option>
                            <option value="17">Réalité virtuelle</option>
                            <option value="18">Théâtre</option>
                            <option value="19">Cinéma</option>
                        </select>
                    </div>

                    <div id="pays" class="col-sm-6">
                        <label for="">Pays</label>
                        <select value="" required autocomplete="" name="pays" id="pays"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">

                            <option value="">Choisir...</option>
                            <option value="">Togo</option>
                            <option value="">Ghana</option>

                        </select>
                    </div>


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

<script>
    function afficherparticulier() {
        document.getElementById('nom').style.display = "block";
        document.getElementById('raison').style.display = "none";
        document.getElementById('date').style.display = "block";
        document.getElementById('genre').style.display = "block";
        document.getElementById('adresse').style.display = "block";
        document.getElementById('prenom').style.display = "block";
        document.getElementById('creation').style.display = "none";


    }

    function afficherprofessionel() {
        document.getElementById('nom').style.display = "none";
        document.getElementById('raison').style.display = "block";
        document.getElementById('prenom').style.display = "none";
        document.getElementById('date').style.display = "none";
        document.getElementById('genre').style.display = "none";
        document.getElementById('adresse').style.display = "block";
        document.getElementById('creation').style.display = "block";


    }

</script>
