<?php
$Var = "Profil Organisateurs";
?>

<?php $__env->startSection('content-2'); ?>
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
    margin-top: 145px;
    padding-top: 30px;
    margin-left: 16%;
    margin-bottom: 7%;
  }
</style>
    <div class="container col-10  card ">
        <img class="card-img-top img-circle rounded-circle" src="images\avatar.png" alt="Card image cap">
        <div class="col text-center" style="color: cornflowerblue">
            <h5 style="font-size: 200%;margin-top:4%"><b>Completer votre profil</b></h5>
        </div>
        <div class="card-body">
            
        <form method="POST" action="" name="Profil" enctype='multipart/form-data'>
                <?php echo csrf_field(); ?>
                <div class="form-group row ">
                    <div class="col-sm-6 " style="margin-top: 2.5em">
                        <input type="radio" name="type_compte" value="Particulier" onclick="afficherparticulier()" checked>
                        <label for="particulier">Particulier</label>
                        <input type="radio" name="type_compte" value="Entreprise" onclick="afficherprofessionel()"> <label
                            for="professionel">Professionel</label>
                    </div>
                    <div id="nom" class="col-sm-6 ">
                        <label for="">Votre Nom <b style="color: red">*</b></label>
                        <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                            id="">
                    </div>
                    <div id="raison" class="col-sm-6 " style="display:none;">
                        <label for="">Raison sociale <b style="color: red">*</b></label>
                        <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                            id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div id="prenom" class="col-sm-6">
                        <label for="prenom">Votre Prenom <b style="color: red">*</b></label>
                        <input type="text" class="form-control " value="" required autocomplete="" name="prenom"
                            style="border-radius: 20px;">

                    </div>
                    <div id="date" class="col-sm-6">
                        <label for="">Date de naissance <b style="color: red">*</b></label>
                        <input type="date" class="form-control " value="naissance" required autocomplete="" name="naissance"
                            style="border-radius: 20px;">

                    </div>
                    <div id="nom-resp" class="col-sm-4 " style="display:none;">
                        <label for="">Nom du responsable <b style="color: red">*</b></label>
                        <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                            id="">
                    </div>
                    <div id="prenom-resp" class="col-sm-4 " style="display:none;">
                        <label for="">Prenom du responsable <b style="color: red">*</b></label>
                        <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                            id="">
                    </div>
                    <div id="annee" class="col-sm-4" style="display:none;">
                        <label for="">Année de création <b style="color: red">*</b></label>
                        <input type="date" class="form-control " value="annee" required autocomplete="" name="annee"
                            style="border-radius: 20px;">

                    </div>
                </div>

                <div class="form-group row">
                    <div id="genre" class="col-sm-6">
                        <label for="">Genre <b style="color: red">*</b></label><br>
                        <select value="" required autocomplete="" name="pays" id="pays"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">

                            <option value="">Choisir...</option>
                            <option value="">Masculin</option>
                            <option value="">Feminin</option>

                        </select>
                    </div>
                    <div id="situation" class="col-sm-6">
                        <label for="">Situation matrimoniale <b style="color: red">*</b></label><br>
                        <select value="" required autocomplete="" name="" id="pays"
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
                    <div class="col-sm-6">
                        <label for="">Téléphone <b style="color: red">*</b></label>
                        <input type="tel" class="form-control " value="" required autocomplete="" name="telephone"
                            style="border-radius: 20px;">
                    </div>
                    <div class="col-sm-6">
                        <label for="">Email <b style="color: red">*</b></label>
                        <input type="email" class="form-control" value="" required autocomplete="" name="email"
                            style="border-radius: 20px;">
                    </div>
                </div>
                <div class="form-group row">
                    <div id="pays" class="col-sm-6">
                        <label for="">Pays <b style="color: red">*</b></label><br>
                        <select value="" required autocomplete="" name="pays" id="pays"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">

                            <option value="">Choisir...</option>
                            <option value="">Togo</option>
                            <option value="">Ghana</option>

                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="">Ville <b style="color: red">*</b></label>
                        <input type="text" class="form-control " value="" required autocomplete="" name="ville"
                            style="border-radius: 20px;">

                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="">Adresse <b style="color: red">*</b></label>
                        <input type="tel" class="form-control " value="" required autocomplete="" name="adresse"
                            style="border-radius: 20px;">

                    </div>
                  
                    <div id="specialite" class="col-sm-6">
                        <label for="">Spécialité <b style="color: red">*</b></label><br>
                        <select value="" required autocomplete="" name="" id="ville"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">
                            <option value="">Choisir...</option>
                            <option value="">Agronome</option>
                            <option value="">Ingenieurie</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div id="carte" class="col-sm-6 ">
                        <label for="">Joindre votre carte d'identité en pdf <b style="color: red">*</b></label>
                        <input type="file" value="" autocomplete="plan" name="plan" id=""
                            style="width: 100%; padding: 3px;">
                    </div>
                    <div id="logo" class="col-sm-6 ">
                        <label for="">Joindre votre logo <b style="color: red">*</b></label>
                        <input type="file" value="" autocomplete="plan" name="plan" id=""
                            style="width: 100%; padding: 3px;">
                    </div>
                </div>


<div id="new">
    <fieldset
        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
        <div id="reseaux">
            <div class="row clearfix">
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered table-hover table-sortable" id="tab_logic" style="width: 120%">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    Vos réseaux sociaux <b style="color: red">*</b>
                                </th>
                                <th class="text-center"
                                    style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr id='addr0' data-id="0" class="hidden">
                                <td data-name="Facebook">
                                    <input type="text" name='Facebook[]' placeholder='Facebook'
                                        class="form-control" />
                                </td>
                                <td data-name="Instagram">
                                    <input type="text" name='Instagram[]' placeholder='Instagram'
                                        class="form-control" />
                                </td>
                                <td data-name="YouTube">
                                    <input type="text" name='YouTube[]' placeholder='YouTube'
                                        class="form-control" />
                                </td>
                                <td data-name="Linkedin">
                                    <input type="text" name='Linkedin[]' placeholder='Linkedin'
                                        class="form-control" />
                                </td>
                                <td data-name="Telegram">
                                    <input type="text" name='Telegram[]' placeholder='Telegram'
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
            <a style="color: white" id="add_row" class="btn btn-primary float-right">Ajouter réseaux</a>
        </div>
    </fieldset>
</div>
                
                

                
                <div id="new1">
                   
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div class="btn btn-secondary float-right "
                            style="margin-top:-1.8em !important; margin-right:-1.3em" onclick="supprimer()">X</div>
                        <div id="experience">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic1" style="width: 180%">
                                        <h5 class="text-center"> <b>Vos expériences passés <b style="color: red">*</b></b> </h5>
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
                                                        placeholder='% de satisfaction du client' required class="form-control" />
                                                </td>
                                                <td data-name="évènement">
                                                    <input type="text" name='évènement[]' required placeholder='Nom de lévènement'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="missions">
                                                    <input type="text" name='mission[]' required placeholder='missions'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="annee">
                                                    <input type="date" name='annee[]' required placeholder='La date de lexpérience'
                                                        class="form-control" style="border-color: cornflowerblue; border-radius: 20px"/>
                                                </td>
                                                <td data-name="référents">
                                                    <input type="text" name='référents[]' required placeholder='Le/Les référents'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="commentaire">
                                                    <input type="text" name='commentaire[]' required placeholder='Dites-nous en quelques lignes'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="image">
                                                    <input type="file" name='image[]'  required placeholder=''
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
                    </fieldset>
                </div>
               




                <div id="new2">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div class="btn btn-secondary float-right "
                            style="margin-top:-1.8em !important; margin-right:-1.3em" onclick="supprimer()">X</div>
                        <div id="experience">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic2" style="width: 180%">
                                        <h5 class="text-center" > <b>Votre equipe <b style="color: red">*</b></b> </h5>
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Noms
                                                </th>
                                                <th class="text-center">
                                                    Prenoms
                                                </th>
                                                <th class="text-center">
                                                    Titres
                                                </th>
                                                <th class="text-center">
                                                    Années d'expériences
                                                </th>                                               
                                                <th class="text-center"
                                                    style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='addr0' data-id="0" class="hidden">
                                                <td data-name="nom">
                                                    <input type="text" name='nom[]'
                                                        placeholder='Nom du collaborateur' required class="form-control" />
                                                </td>
                                                <td data-name="prenom">
                                                    <input type="text" name='prenom[]' placeholder='Prenom du collaborateur' required
                                                        class="form-control" />
                                                </td>
                                                <td data-name="titre">
                                                    <input type="text" name='titre[]' placeholder='Titre du collaborateur' required
                                                        class="form-control" />
                                                </td>
                                                <td data-name="annee">
                                                    <input type="text" name='annee[]' placeholder='Année dexpérience' required
                                                        class="form-control"/>
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
                            <a style="color: white" id="add_row2" class="btn btn-primary float-right">Ajouter equipe</a>
                        </div>
                    </fieldset>
                </div>

                
                <div id="new3">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div class="btn btn-secondary float-right "
                            style="margin-top:-1.8em !important; margin-right:-1.3em" onclick="supprimer()">X</div>
                        <div id="reseaux">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic3" style="width: 115%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Vos valeurs <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center"
                                                    style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='addr0' data-id="0" class="hidden">
                                                <td data-name="valeur">
                                                    <input type="text" name='valeur[]' placeholder='' required
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
                            <a style="color: white" id="add_row3" class="btn btn-primary float-right">Ajouter valeur</a>
                        </div>
                    </fieldset>
                </div>
                
        
        <div id="newb">
            <fieldset
                style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                <div class="btn btn-secondary float-right "
                    style="margin-top:-1.8em !important; margin-right:-1.3em" onclick="supprimer()">X</div>
                <div id="reseaux">
                    <div class="row clearfix">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-bordered table-hover table-sortable" id="tab_logic_banque" style="width: 180%">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            Vos coordonnées bancaire <b style="color: red">*</b>
                                        </th>
                                        <th class="text-center"
                                            style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr id='addr0' data-id="0" class="hidden">
                                        <td data-name="nomB">
                                            <input type="text" name='nomB[]' placeholder='Nom de la banque' 
                                                class="form-control" />
                                        </td>
                                        <td data-name="nom">
                                            <input type="text" name='nom[]' placeholder='Nom du titulaire' 
                                                class="form-control" />
                                        </td>
                                        <td data-name="prenom">
                                            <input type="text" name='prenom[]' placeholder='Prenom du titulaire' 
                                                class="form-control" />
                                        </td>
                                        <td data-name="numeroI">
                                            <input type="text" name='numeroI[]' placeholder='Numero IBAN' 
                                                class="form-control" />
                                        </td>
                                        <td data-name="numeroB">
                                            <input type="text" name='numeroB[]' placeholder='Numero BIC'
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
                    <a style="color: white" id="add_row_banque" class="btn btn-primary float-right">Ajouter coordonnées</a>
                </div>
            </fieldset>
        </div>

        <div class="form-group row ">
            <div id="nom" class="col-sm-6 ">
                <label for="">Condition de paiement <b style="color: red">*</b></label>
                <textarea name="" id="" cols="5" rows="5" style="border-radius: 20px" placeholder="" required></textarea>
            </div>
            <div id="raison" class="col-sm-6 " >
                <label for="">Pourquoi vous confiez un évènement? <b style="color: red">*</b></label>
               <textarea name="" id="" cols="5" rows="5" style="border-radius: 20px" placeholder="Dites-nous en 3lignes maximum" required></textarea>
            </div>
        </div>
        <div class="form-group row ">
            <div id="materiel" class="col-sm-6 ">
                <label for="">Votre matériel <b style="color: red">*</b></label>
                <textarea name="" id="" cols="5" rows="5" style="border-radius: 20px" placeholder="exemple: Louche,Assiètte,Fourchette,etc...." required></textarea>
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
<?php $__env->stopSection(); ?>
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
        document.getElementById('new1').style.display = "block";
        document.getElementById('new2').style.display = "block";
        document.getElementById('materiel').style.display = "block";
        document.getElementById('client').style.display = "none";
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
        document.getElementById('new1').style.display = "none";
        document.getElementById('new2').style.display = "none";       
        document.getElementById('materiel').style.display = "none";
        document.getElementById('client').style.display = "block";
    }

</script>


<script>
    $(document).ready(function() {
        $("#add_row").on("click", function() {
            // Dynamic Rows Code

            // Get max row id and set new id
            var newid = 0;
            $.each($("#tab_logic tr"), function() {
                if (parseInt($(this).data("id")) > newid) {
                    newid = parseInt($(this).data("id"));
                }
            });
            newid++;

            var tr = $("<tr></tr>", {
                id: "addr" + newid,
                "data-id": newid
            });

            // loop through each td and create new elements with name of newid
            $.each($("#tab_logic tbody tr:nth(0) td"), function() {
                var td;
                var cur_td = $(this);

                var children = cur_td.children();

                // add new td and element if it has a nane
                if ($(this).data("name") !== undefined) {
                    td = $("<td></td>", {
                        "data-name": $(cur_td).data("name")
                    });

                    var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                    c.attr("name", $(cur_td).data("name") + newid);
                    c.appendTo($(td));
                    td.appendTo($(tr));
                } else {
                    td = $("<td></td>", {
                        'text': $('#tab_logic tr').length
                    }).appendTo($(tr));
                }
            });

            $(tr).appendTo($('#tab_logic'));

            $(tr).find("td button.row-remove").on("click", function() {
                $(this).closest("tr").remove();
            });
        });
        // Sortable Code
        var fixHelperModified = function(e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();

            $helper.children().each(function(index) {
                $(this).width($originals.eq(index).width())
            });

            return $helper;
        };

        $(".table-sortable tbody").sortable({
            helper: fixHelperModified
        }).disableSelection();

        $(".table-sortable thead").disableSelection();



        $("#add_row").trigger("click");
    });

</script>
<script>
  $(document).ready(function() {
      $("#add_row1").on("click", function() {
          // Dynamic Rows Code

          // Get max row id and set new id
          var newid = 0;
          $.each($("#tab_logic1 tr"), function() {
              if (parseInt($(this).data("id")) > newid) {
                  newid = parseInt($(this).data("id"));
              }
          });
          newid++;

          var tr = $("<tr></tr>", {
              id: "addr" + newid,
              "data-id": newid
          });

          // loop through each td and create new elements with name of newid
          $.each($("#tab_logic1 tbody tr:nth(0) td"), function() {
              var td;
              var cur_td = $(this);

              var children = cur_td.children();

              // add new td and element if it has a nane
              if ($(this).data("name") !== undefined) {
                  td = $("<td></td>", {
                      "data-name": $(cur_td).data("name")
                  });

                  var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                  c.attr("name", $(cur_td).data("name") + newid);
                  c.appendTo($(td));
                  td.appendTo($(tr));
              } else {
                  td = $("<td></td>", {
                      'text': $('#tab_logic1 tr').length
                  }).appendTo($(tr));
              }
          });

          $(tr).appendTo($('#tab_logic1'));

          $(tr).find("td button.row-remove").on("click", function() {
              $(this).closest("tr").remove();
          });
      });
      // Sortable Code
      var fixHelperModified = function(e, tr) {
          var $originals = tr.children();
          var $helper = tr.clone();

          $helper.children().each(function(index) {
              $(this).width($originals.eq(index).width())
          });

          return $helper;
      };

      $(".table-sortable tbody").sortable({
          helper: fixHelperModified
      }).disableSelection();

      $(".table-sortable thead").disableSelection();
      $("#add_row1").trigger("click");
  });
</script>
<script>
    $(document).ready(function() {
        $("#add_row2").on("click", function() {
            // Dynamic Rows Code
  
            // Get max row id and set new id
            var newid = 0;
            $.each($("#tab_logic2 tr"), function() {
                if (parseInt($(this).data("id")) > newid) {
                    newid = parseInt($(this).data("id"));
                }
            });
            newid++;
  
            var tr = $("<tr></tr>", {
                id: "addr" + newid,
                "data-id": newid
            });
  
            // loop through each td and create new elements with name of newid
            $.each($("#tab_logic2 tbody tr:nth(0) td"), function() {
                var td;
                var cur_td = $(this);
  
                var children = cur_td.children();
  
                // add new td and element if it has a nane
                if ($(this).data("name") !== undefined) {
                    td = $("<td></td>", {
                        "data-name": $(cur_td).data("name")
                    });
  
                    var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                    c.attr("name", $(cur_td).data("name") + newid);
                    c.appendTo($(td));
                    td.appendTo($(tr));
                } else {
                    td = $("<td></td>", {
                        'text': $('#tab_logic2 tr').length
                    }).appendTo($(tr));
                }
            });
  
            $(tr).appendTo($('#tab_logic2'));
  
            $(tr).find("td button.row-remove").on("click", function() {
                $(this).closest("tr").remove();
            });
        });
        // Sortable Code
        var fixHelperModified = function(e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();
  
            $helper.children().each(function(index) {
                $(this).width($originals.eq(index).width())
            });
  
            return $helper;
        };
  
        $(".table-sortable tbody").sortable({
            helper: fixHelperModified
        }).disableSelection();
  
        $(".table-sortable thead").disableSelection();
        $("#add_row2").trigger("click");
    });
  
  </script>
  
<script>
    $(document).ready(function() {
        $("#add_row3").on("click", function() {
            // Dynamic Rows Code

            // Get max row id and set new id
            var newid = 0;
            $.each($("#tab_logic3 tr"), function() {
                if (parseInt($(this).data("id")) > newid) {
                    newid = parseInt($(this).data("id"));
                }
            });
            newid++;

            var tr = $("<tr></tr>", {
                id: "addr" + newid,
                "data-id": newid
            });

            // loop through each td and create new elements with name of newid
            $.each($("#tab_logic3 tbody tr:nth(0) td"), function() {
                var td;
                var cur_td = $(this);

                var children = cur_td.children();

                // add new td and element if it has a nane
                if ($(this).data("name") !== undefined) {
                    td = $("<td></td>", {
                        "data-name": $(cur_td).data("name")
                    });

                    var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                    c.attr("name", $(cur_td).data("name") + newid);
                    c.appendTo($(td));
                    td.appendTo($(tr));
                } else {
                    td = $("<td></td>", {
                        'text': $('#tab_logic3 tr').length
                    }).appendTo($(tr));
                }
            });

            $(tr).appendTo($('#tab_logic3'));

            $(tr).find("td button.row-remove").on("click", function() {
                $(this).closest("tr").remove();
            });
        });
        // Sortable Code
        var fixHelperModified = function(e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();

            $helper.children().each(function(index) {
                $(this).width($originals.eq(index).width())
            });

            return $helper;
        };

        $(".table-sortable tbody").sortable({
            helper: fixHelperModified
        }).disableSelection();

        $(".table-sortable thead").disableSelection();
        $("#add_row3").trigger("click");
    });

</script>


<script>
    $(document).ready(function() {
        $("#add_row_banque").on("click", function() {
            // Dynamic Rows Code

            // Get max row id and set new id
            var newid = 0;
            $.each($("#tab_logic_banque tr"), function() {
                if (parseInt($(this).data("id")) > newid) {
                    newid = parseInt($(this).data("id"));
                }
            });
            newid++;

            var tr = $("<tr></tr>", {
                id: "addr" + newid,
                "data-id": newid
            });

            // loop through each td and create new elements with name of newid
            $.each($("#tab_logic_banque tbody tr:nth(0) td"), function() {
                var td;
                var cur_td = $(this);

                var children = cur_td.children();

                // add new td and element if it has a nane
                if ($(this).data("name") !== undefined) {
                    td = $("<td></td>", {
                        "data-name": $(cur_td).data("name")
                    });

                    var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                    c.attr("name", $(cur_td).data("name") + newid);
                    c.appendTo($(td));
                    td.appendTo($(tr));
                } else {
                    td = $("<td></td>", {
                        'text': $('#tab_logic_banque tr').length
                    }).appendTo($(tr));
                }
            });

            $(tr).appendTo($('#tab_logic_banque'));

            $(tr).find("td button.row-remove").on("click", function() {
                $(this).closest("tr").remove();
            });
        });
        // Sortable Code
        var fixHelperModified = function(e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();

            $helper.children().each(function(index) {
                $(this).width($originals.eq(index).width())
            });

            return $helper;
        };

        $(".table-sortable tbody").sortable({
            helper: fixHelperModified
        }).disableSelection();

        $(".table-sortable thead").disableSelection();



        $("#add_row_banque").trigger("click");
    });

</script>
<?php echo $__env->make('organisateurs.model-organisateurs-account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Cible\cible_project1\resources\views/organisateurs/profile-organisateurs.blade.php ENDPATH**/ ?>