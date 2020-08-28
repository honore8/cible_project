@php
$Var = "Profil Organisateurs";
@endphp
@extends('investisseurs.investisseurs-account')
@section('content-4')
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
    margin-top: 90px;
    padding-top: 30px;
    margin-left: 8%;
    margin-bottom: 7%;
  }
</style>
<script>
    $(function() {
        $('.chosen-select').chosen();
        $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
    });
</script>
    <div class="container col-10  card ">
        <img class="card-img-top img-circle rounded-circle" src="images\avatar.png" alt="Card image cap">
        <div class="col text-center" style="color: cornflowerblue">
            <h5 style="font-size: 200%;margin-top:4%"><b>Completer votre profil</b></h5>
        </div>
        <div class="card-body">
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
                        <label for="">Votre Nom <b style="color: red">*</b></label>
                        <input type="text" value=""  autocomplete="nom" class="form-control" name=""
                            id="">
                    </div>
                    <div id="raison" class="col-sm-6 " style="display:none;">
                        <label for="">Raison sociale <b style="color: red">*</b></label>
                        <input type="text" value=""  autocomplete="raison" class="form-control" name="raison"
                            id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div id="prenom" class="col-sm-6">
                        <label for="prenom">Votre Prenom <b style="color: red">*</b></label>
                        <input type="text" class="form-control " value=""  autocomplete="" name="prenom"
                            style="border-radius: 20px;">
                    </div>
                    <div id="date" class="col-sm-6">
                        <label for="">Date de naissance <b style="color: red">*</b></label>
                        <input type="date" class="form-control " value="naissance"  autocomplete="" name="naissance"
                            style="border-radius: 20px;">
                    </div>
                    <div id="nom-resp" class="col-sm-4 " style="display:none;">
                        <label for="">Nom du responsable <b style="color: red">*</b></label>
                        <input type="text" value=""  autocomplete="nom-resp" class="form-control" name=""
                            id="">
                    </div>
                    <div id="prenom-resp" class="col-sm-4 " style="display:none;">
                        <label for="">Prenom du responsable <b style="color: red">*</b></label>
                        <input type="text" value=""  autocomplete="prenom-resp" class="form-control" name=""
                            id="">
                    </div>
                    <div id="annee" class="col-sm-4" style="display:none;">
                        <label for="">Année de création <b style="color: red">*</b></label>
                        <input type="date" class="form-control " value="annee"  autocomplete="" name="annee"
                            style="border-radius: 20px;">
                    </div>
                </div>

                <div class="form-group row">
                    <div id="genre" class="col-sm-6">
                        <label for="">Genre <b style="color: red">*</b></label><br>
                        <select value=""  autocomplete="" name="genre" id="genre"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">
                            <option value="">Choisir...</option>
                            <option value="">Masculin</option>
                            <option value="">Feminin</option>
                        </select>
                    </div>
                    <div id="situation" class="col-sm-6">
                        <label for="">Situation matrimoniale <b style="color: red">*</b></label><br>
                        <select value="" required autocomplete="" name="situation" id="situation"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">
                            <option value="">Choisir...</option>
                            <option value="">Célibataire</option>
                            <option value="">Mariée</option>
                            <option value="">Veuve</option>
                            <option value="">Divorcée</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div id="carte" class="col-sm-6 ">
                        <label for="">Joindre votre carte d'identité en pdf <b style="color: red">*</b></label>
                        <input type="file" value="" autocomplete="plan" name="plan" id=""
                            style="width: 100%; padding: 3px;">
                    </div>
                    <div id="pays" class="col-sm-6">
                        <label for="">Pays <b style="color: red">*</b></label><br>
                        <select value=""  autocomplete="" name="pays" id="pays"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">
                            <option value="">Choisir...</option>
                            <option value="">Togo</option>
                            <option value="">Ghana</option>
                        </select>
                    </div> 
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Téléphone <b style="color: red">*</b></label>
                        <input type="tel" class="form-control " value=""  autocomplete="" name="telephone"
                            style="border-radius: 20px;">
                    </div>
                    <div class="col-sm-6">
                        <label for="">Email <b style="color: red">*</b></label>
                        <input type="email" class="form-control" value=""  autocomplete="" name="email"
                            style="border-radius: 20px;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Adresse <b style="color: red">*</b></label>
                        <input type="tel" class="form-control " value=""  autocomplete="" name="adresse"
                            style="border-radius: 20px;">
                    </div> 
                    <div class="col-sm-6">
                        <label for="">Ville <b style="color: red">*</b></label>
                        <input type="text" class="form-control " value=""  autocomplete="" name="ville"
                            style="border-radius: 20px;">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6" id="profession">
                        <label for="">Profession de base <b style="color: red">*</b></label>
                        <input type="text" class="form-control " value="profession" required autocomplete="" name="profession"
                            style="border-radius: 20px;">
                    </div> 
                    <div id="pays" class="col-sm-6">
                        <label for="">Secteur d'activité <b style="color: red">*</b></label><br>
                        <select value="" required autocomplete="" name="activite" id="activite"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">
                            <option value="">Choisir...</option>
                            <option value="">agronomie</option>
                            <option value="">maconnerie</option>
                        </select>
                    </div>   
                </div>
                <div class="form-group row">
                    <div id="event" class="col-sm-6">
                        <label for="">Spécialités qui vous interesse???</label>
                        <select name="exampleInputType" id="exampleInputType" multiple class="chosen-select"
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
                </div>
                <fieldset>
                    <legend></legend>
                    <div class=" form-group row">
                        <label for="" &emsp>Age de l'entreprise? </label>&nbsp &nbsp
                        <input type="radio" name="moyen" value="oui"  style="margin-top: 5px"> <label> &nbsp
                            0-5ans &nbsp &nbsp / &nbsp &nbsp</label>
                        <input type="radio" name="moyen" value="non"  style="margin-top: 5px"> <label> &nbsp
                            5-10ans &nbsp &nbsp / &nbsp &nbsp</label>
                            <input type="radio" name="moyen" value="non"  style="margin-top: 5px"> <label> &nbsp
                                Plus de 10ans &nbsp &nbsp / &nbsp &nbsp</label>
                                <input type="radio" name="moyen" value="non"  style="margin-top: 5px"> <label> &nbsp
                                    Sans importance &nbsp &nbsp / &nbsp &nbsp</label>
                    </div>
              
                    <div class=" form-group row">
                        {{-- <label for="">Avez-vous un ou des handicaps? </label>&nbsp &nbsp --}}
                        <input type="radio" name="cloture" value="oui"  style="margin-top: 5px"> <label>
                            &nbsp Acheter des boites &nbsp &nbsp / &nbsp &nbsp</label>
                        <input type="radio" name="cloture" value="non"  style="margin-top: 5px"> <label>
                            &nbsp Investir dans une boite</label>
                    </div>
                </fieldset>
<br><br>

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
        document.getElementById('situation').style.display = "block";
        document.getElementById('prenom').style.display = "block";
        document.getElementById('nom-resp').style.display = "none";
        document.getElementById('prenom-resp').style.display = "none";
        document.getElementById('annee').style.display = "none";
       document.getElementById('profession').style.display = "block";
      
    }

    function afficherprofessionel() {
        document.getElementById('nom').style.display = "none";
        document.getElementById('raison').style.display = "block";
        document.getElementById('prenom').style.display = "none";
        document.getElementById('nom-resp').style.display = "block";
        document.getElementById('prenom-resp').style.display = "block";
        document.getElementById('date').style.display = "none";
        document.getElementById('genre').style.display = "none";
        document.getElementById('situation').style.display = "none";
        document.getElementById('annee').style.display = "block";
        document.getElementById('profession').style.display = "none";
      
    }

</script>
<script>
    $('.chosen-select').chosen();
</script>
