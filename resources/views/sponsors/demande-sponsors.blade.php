@php
$Var = "Demande Sponsors";
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
      <script>
        $(function() {
            $('.chosen-select').chosen();
            $('.chosen-select-deselect').chosen({ allow_single_deselect: true });
        });
    </script>
    <div class="container col-10  card ">

        <div class="col text-center" style="color: cornflowerblue">
            <h5 style="font-size: 200%;margin-top:4%"><b>Demande de sponsoring/partenariat</b></h5>
        </div>
        <div class="card-body">

            <form method="POST" action="" name="" enctype='multipart/form-data'>
                @csrf
                <div class="form-group row ">
                    <div id="nom" class="col-sm-6 ">
                        <label for="">Avantages du sponsor</label>
                        <textarea name="" id="" cols="5" rows="5" class="w-100 " style="border-radius: 20px" placeholder="Dites-nous en 3lignes maximum" maxlength="50"></textarea>
                    </div>
                    <div id="raison" class="col-sm-6 " >
                        <label for="">Bénéficiaires?</label>
                       <textarea name="" id="" cols="5" rows="5" class="w-100 " style="border-radius: 20px" placeholder="" maxlength="50"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-4">
                        <label for="">Organisateurs</label>
                        <input type="text" class="form-control " value="" required autocomplete="" name="oragnisateur"
                            style="border-radius: 20px;">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Acteurs de l'évènement</label>
                        <input type="text" class="form-control" value="" required autocomplete="" name="acteur"
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
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Date limite de sponsoring</label>
                        <input type="date" class="form-control " value="" required autocomplete="" name="limite"
                            style="border-radius: 20px;">
                    </div>
                    <div class="col-sm-6">
                        <label for="">Téléphone</label>
                        <input type="tel" class="form-control" value="" required autocomplete="" name="telephone"
                            style="border-radius: 20px;">
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
<script>
    $('.chosen-select').chosen();
</script>