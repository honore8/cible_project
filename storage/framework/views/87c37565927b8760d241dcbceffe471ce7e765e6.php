<?php
$Var = "Evènement";
?>

<?php $__env->startSection('content-2'); ?>
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
            margin-top: 90px;
            padding-top: 30px;
            margin-left: 16%;
            margin-bottom: 7%;
        }

    </style>
    <script>
        $(function() {
            $('.chosen-select').chosen();
            $('.chosen-select-deselect').chosen({
                allow_single_deselect: true
            });
        });

    </script>
    <div class="container card col-10">
        <div class="col text-center" style="color: cornflowerblue">
            <h5 style="font-size: 200%;margin-top:4%"><b>créer un évènement</b></h5>
        </div>
        <div class="card-body">

            <form method="POST" action="" name="Profil" enctype='multipart/form-data'>
                <?php echo csrf_field(); ?>

                <div class="form-group row ">
                    <div id="titre" class="col-sm-4 ">
                        <label for="">Titre de l'évènement</label>
                        <input type="text" value="" required autocomplete="titre" class="form-control" name="titre"
                            value="Titre" style="border-radius: 20px;">
                    </div>
                    <div id="organisateur" class="col-sm-4 ">
                        <label for="">Organisateur</label>
                        <input type="text" value="" required autocomplete="organisateur" class="form-control"
                            name="organisateur" style="border-radius: 20px;">
                    </div>
                    <div id="event" class="col-sm-4">
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
                </div>
                <div class="form-group row ">
                    <div id="description" class="col-sm-6 ">
                        <label for="">Description de l'évènement</label>
                        <textarea name="description" id="" cols="5" rows="5" class="w-100 " style="border-radius: 20px"
                            placeholder="Dites-nous en 3lignes maximum" maxlength="50"></textarea>
                    </div>
                    <div id="raison" class="col-sm-6 ">
                        <label for="">Pourquoi ne pas rater l'évènement?</label>
                        <textarea name="rater" id="" cols="5" rows="5" class="w-100 " style="border-radius: 20px"
                            placeholder="Dites-nous en 3lignes maximum" maxlength="50"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div id="pays" class="col-sm-4">
                        <label for="">Pays</label><br>
                        <select value="" required autocomplete="" name="pays" id="pays"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">

                            <option value="">Choisir...</option>
                            <option value="">Togo</option>
                            <option value="">Ghana</option>

                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="">Ville <b style="color: red">*</b></label>
                        <input type="text" class="form-control " value="" required autocomplete="" name="ville"
                            style="border-radius: 20px;">

                    </div>
                    <div class="col-sm-4">
                        <label for="">Adresse <b style="color: red">*</b></label>
                        <input type="tel" class="form-control " value="" required autocomplete="" name="adresse"
                            style="border-radius: 20px;">

                    </div>

                </div>
                <div class="form-group row ">
                    <div id="base" class="col-sm-6 ">
                        <label for="">Document de base <b style="color: red">*</b></label>
                        <input type="file" value="" autocomplete="Document" name="Document" id=""
                            style="width: 100%; padding: 3px;">
                    </div>
                    <div id="jours" class="col-sm-6 ">
                        <label for="">Nombre de jours</label>
                        <input type="number" value="" required autocomplete="capital" class="form-control" name="jours"
                            style="border-radius: 20px;">
                    </div>
                </div>
                
                <div id="new">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div id="reseaux">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic"
                                        style="width: 120%">
                                        <h5 class="text-center"> <b>Détails du nombre(s) de jour(s)</b> </h5>
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Dates <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Heures de début <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Heures final <b style="color: red">*</b>
                                                </th>

                                                <th class="text-center"
                                                    style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='addr0' data-id="0" class="hidden">
                                                <td data-name="Date">
                                                    <input type="text" name='Date[]' placeholder='Date'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="Debut">
                                                    <input type="time" name='debut[]' placeholder='Heure-début'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="Final">
                                                    <input type="time" name='final[]' placeholder='Heure-Final'
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
                            <a style="color: white" id="add_row" class="btn btn-primary float-right">Ajouter jour</a>
                        </div>
                    </fieldset>
                </div>
                
                <div id="new3">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div class="btn btn-secondary float-right "
                            style="margin-top:-1.8em !important; margin-right:-1.3em" onclick="supprimer()">X</div>
                        <div id="acteur">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic3"
                                        style="width: 115%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Acteurs principaux <b style="color: red">*</b>
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
                            <a style="color: white" id="add_row3" class="btn btn-primary float-right">Ajouter Acteur</a>
                        </div>
                    </fieldset>
                </div>
                
                <div id="newI">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div class="btn btn-secondary float-right "
                            style="margin-top:-1.8em !important; margin-right:-1.3em" onclick="supprimer()">X</div>
                        <div id="invite">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic_I"
                                        style="width: 115%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Invités spéciaux <b style="color: red">*</b>
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
                            <a style="color: white" id="add_row_I" class="btn btn-primary float-right">Ajouter invité</a>
                        </div>
                    </fieldset>
                </div>
                <div id="newT">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div class="btn btn-secondary float-right "
                            style="margin-top:-1.8em !important; margin-right:-1.3em" onclick="supprimer()">X</div>
                        <div id="acteur">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logicT"
                                        style="width: 115%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Les modalités <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center"
                                                    style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='addr0' data-id="0" class="hidden">
                                                <td data-name="ticket">
                                                    <input type="text" name='ticket[]' placeholder='Type de ticket' required
                                                        class="form-control" />
                                                </td>
                                                <td data-name="limite">
                                                    <input type="text" name='limite[]' placeholder='Nombre limite' required
                                                        class="form-control" />
                                                </td>
                                                <td data-name="cout">
                                                    <input type="text" name='cout[]' placeholder='Cout' required
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
                            <a style="color: white" id="add_rowT" class="btn btn-primary float-right">Ajouter modalités</a>
                        </div>
                    </fieldset>
                </div>
                <br>
                <fieldset>
                    <legend></legend>
                    <div class=" form-group row">
                        <input type="radio" name="moyen" value="oui"  onclick="non2()" style="margin-top: 5px"> <label> &nbsp
                            Gratuit &nbsp &nbsp / &nbsp &nbsp</label>
                        <input type="radio" name="moyen" value="non" onclick="oui2()" style="margin-top: 5px"> <label> &nbsp
                            Payant</label>
                    </div>
                    <div id="oui2" style="display: none">
                        <div class="row">
                            <label for="" style="margin-left: 3%">Cout </label>
                            <div class="col-sm-12">                                
                                <textarea name="" id="" cols="30" rows="2" class="w-75" style="border-radius: 20px"
                                    placeholder="Différents prix"></textarea>&nbsp
                                &nbsp
                            </div>
                        </div>
                    </div>
                    <div class=" form-group row">
                        <label for="">Collation offerte? </label>&nbsp &nbsp
                        <input type="radio" name="cloture" value="oui"  style="margin-top: 5px"> <label>
                            &nbsp OUI &nbsp &nbsp / &nbsp &nbsp</label>
                        <input type="radio" name="cloture" value="non"  style="margin-top: 5px"> <label>
                            &nbsp NON</label>
                    </div>

                    <div class=" form-group row">
                        <label for="">Statut de l'évènement?</label>&nbsp &nbsp &nbsp &nbsp
                        <input type="radio" name="cloture" value="oui"  style="margin-top: 5px"> <label>
                            &nbsp Reporté &nbsp &nbsp / &nbsp &nbsp</label>
                        <input type="radio" name="cloture" value="non"  style="margin-top: 5px"> <label>
                            &nbsp Annulé &nbsp &nbsp / &nbsp &nbsp</label>
                        <input type="radio" name="cloture" value="non"  style="margin-top: 5px"> <label>
                            &nbsp ça tien</label>
                    </div>
                </fieldset>
                <br>
                <div class="form-group">
                    <input type='file' onchange="readURL(this);" name="image"/>
                    <img id="blah" src="#" alt="Télécharger une image pour l'évènement" />
                </div>
                <br>
                <div class="form-group row">
                    <div class="col-sm-12" style=" text-align: center">
                        <button type="submit" class="btn btn-primary bouton">Enregistrer</button>
                        <button type="" class="btn btn-secondary bouton">Modifier</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<style>
    article,
    aside,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }
</style>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(500)

            };

            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function oui2() {
        document.getElementById('oui2').style.display = 'block';
    }

    function non2() {
        document.getElementById('oui2').style.display = 'none';
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
        $("#add_row_I").on("click", function() {
            // Dynamic Rows Code

            // Get max row id and set new id
            var newid = 0;
            $.each($("#tab_logic_I tr"), function() {
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
            $.each($("#tab_logic_I tbody tr:nth(0) td"), function() {
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
                        'text': $('#tab_logic_I tr').length
                    }).appendTo($(tr));
                }
            });

            $(tr).appendTo($('#tab_logic_I'));

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
        $("#add_row_I").trigger("click");
    });

</script>
<script>
    $(document).ready(function() {
        $("#add_rowT").on("click", function() {
            // Dynamic Rows Code

            // Get max row id and set new id
            var newid = 0;
            $.each($("#tab_logicT tr"), function() {
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
            $.each($("#tab_logicT tbody tr:nth(0) td"), function() {
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
                        'text': $('#tab_logicT tr').length
                    }).appendTo($(tr));
                }
            });

            $(tr).appendTo($('#tab_logicT'));

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



        $("#add_rowT").trigger("click");
    });

</script>
<script>
    $('.chosen-select').chosen();

</script>

<?php echo $__env->make('organisateurs.model-organisateurs-account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Cible\cible_project1\resources\views/organisateurs/evenement.blade.php ENDPATH**/ ?>