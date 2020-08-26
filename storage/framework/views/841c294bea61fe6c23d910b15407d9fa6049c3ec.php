<?php
$Var = "profil jobeurs";
?>

<?php $__env->startSection('content-3'); ?>
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
            margin-top: 83px;
            padding-top: 30px;
            margin-left: 0%;
            margin-bottom: 5%;
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
    <div class="container col-12  card ">
        <img class="card-img-top img-circle rounded-circle" src="images\avatar.png" alt="Card image cap">
        <div class="col text-center" style="color: cornflowerblue">
            <h5 style="font-size: 200%;margin-top:4%"><b>Completer votre profil</b></h5>
        </div>
        <div class="card-body">

            <form method="POST" action="" name="Profil" enctype='multipart/form-data'>
                <?php echo csrf_field(); ?>
                <div class="form-group row ">
                    <div id="nom" class="col-sm-6 ">
                        <label for="">Votre Nom <b style="color: red">*</b></label>
                        <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name=""
                            id="">
                    </div>
                    <div id="prenom" class="col-sm-6">
                        <label for="prenom">Votre Prenom <b style="color: red">*</b></label>
                        <input type="text" class="form-control " value="" required autocomplete="" name="prenom"
                            style="border-radius: 20px;">

                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-sm-6">
                        <label for="">Profession <b style="color: red">*</b></label>
                        <input type="text" class="form-control" value="annee" required autocomplete="profession"
                            name="profession" style="border-radius: 20px;">
                    </div>
                    <div id="email" class="col-sm-6 ">
                        <label for="">Email <b style="color: red">*</b></label>
                        <input type="text" value="" required autocomplete="email" class="form-control" name="email"
                            style="border-radius: 20px;">
                    </div>
                </div>
                <div class="form-group row">
                    <div id="adresse" class="col-sm-6">
                        <label for="">Adresse <b style="color: red">*</b></label>
                        <input type="text" class="form-control " value="adresse" required autocomplete="" name="adresse"
                            style="border-radius: 20px;">
                    </div>
                    <div id="date" class="col-sm-6">
                        <label for="">Téléphone <b style="color: red">*</b></label>
                        <input type="tel" class="form-control " value="telephone" required autocomplete="" name="telephone"
                            style="border-radius: 20px;">
                    </div>

                </div>

                <div class="form-group row">
                    <div id="pays" class="col-sm-6">
                        <label for="">Pays <b style="color: red">*</b></label><br>
                        <select value="pays" required autocomplete="" name="pays" id="pays"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">

                            <option value="">Choisir...</option>
                            <option value="">Togo</option>
                            <option value="">Ghana</option>

                        </select>
                    </div>
                    <div id="ville" class="col-sm-6">
                        <label for="">Ville <b style="color: red">*</b></label><br>
                        <select value="ville" required autocomplete="" name="" id="ville"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">
                            <option value="">Choisir...</option>
                            <option value="">Lome</option>
                            <option value="">Accra</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">

                    <div id="carte" class="col-sm-6 ">
                        <label for="">Joindre votre carte d'identité en pdf <b style="color: red">*</b></label>
                        <input type="file" name="carte" id="carte"
                            style="width: 100%; padding: 3px;border: 1px solid #ccc;border-radius: 20px;" value="carte">
                    </div>
                    <div id="date" class="col-sm-6">
                        <label for="">Date naissance <b style="color: red">*</b></label>
                        <input type="date" class="form-control " value="naissance" required autocomplete="" name="naissance"
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
                    <div id="event" class="col-sm-6">
                        <label for="">Jobs désirés <b style="color: red">*</b></label>
                        <select name="exampleInputType" id="exampleInputType" multiple class="chosen-select"
                            style="border-radius: 20px">
                            <option selected> Choisir</option>
                            <option value="1">Agent acceuil</option>
                            <option value="2">Serveur</option>
                            <option value="3">Animateur</option>
                            <option value="4">Plongeur</option>
                            <option value="5">Réceptioniste</option>
                            <option value="6">Ménage & Entretien</option>
                            <option value="7">Formations</option>
                            <option value="8">Commis de cuisine</option>
                            <option value="9">Scanneurs de ticket</option>

                        </select>
                    </div>
                </div>

                

                <div id="new1">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div id="experience">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic1"
                                        style="width: 103%">
                                        <h5 class="text-center"> <b>Vos expériences passés </b> </h5>
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Lieux <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Téléphone <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Poste <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Commentaires <b style="color: red">*</b>
                                                </th>

                                                <th class="text-center"
                                                    style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='addr0' data-id="0" class="hidden">
                                                <td data-name="lieu">
                                                    <input type="date" name='lieu[]'
                                                        placeholder='lieu ou vous avez travaillez' class="form-control"
                                                        style="border-color: cornflowerblue; border-radius: 20px" />
                                                </td>
                                                <td data-name="telephone">
                                                    <input type="tel" name='telephone[]' placeholder='téléphone'
                                                        class="form-control"
                                                        style="border-color: cornflowerblue; border-radius: 20px" />
                                                </td>
                                                <td data-name="poste">
                                                    <input type="text" name='poste[]' placeholder='Poste occupé'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="commentaire">
                                                    <input type="text" name='commentaire[]'
                                                        placeholder='Dites-nous en quelques lignes' class="form-control" />
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
                            <a style="color: white" id="add_row1" class="btn btn-primary float-right">Ajouter
                                expériences</a>
                        </div>
                    </fieldset>
                </div>
                <div class="form-group row ">
                    <div id="nom" class="col-sm-6 ">
                        <label for="">Ce que vous aimez? <b style="color: red">*</b></label>
                        <textarea name="" id="" cols="5" rows="5" class="w-100" style="border-radius: 20px"
                            placeholder="Dites-nous en 3lignes maximum ce que vous aimez"></textarea>
                    </div>
                    <div id="raison" class="col-sm-6 ">
                        <label for="">Ce que vous n'aimez pas? <b style="color: red">*</b></label>
                        <textarea name="" id="" cols="30" rows="5" class="w-100" style="border-radius: 20px"
                            placeholder="Dites-nous en 3lignes maximum ce que vous n'aimez pas"></textarea>
                    </div>
                </div>
                

                <div id="new">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div id="reseaux">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Votre coùt horaire <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center"
                                                    style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='addr0' data-id="0" class="hidden">
                                                <td data-name="minimum">
                                                    <input type="text" name='Facebook[]' placeholder='min/h'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="maximum">
                                                    <input type="text" name='Instagram[]' placeholder='max/h'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="devise">
                                                    <input type="text" name='YouTube[]' placeholder='devise'
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
                            
                        </div>
                    </fieldset>
                </div>
                <fieldset>
                    <legend></legend>
                    <div class=" form-group row">
                        <label for="" &emsp>Avez-vous un moyen de déplacement? </label>&nbsp &nbsp
                        <input type="radio" name="moyen" value="oui" onclick="oui2()" style="margin-top: 5px"> <label> &nbsp
                            OUI &nbsp &nbsp / &nbsp &nbsp</label>
                        <input type="radio" name="moyen" value="non" onclick="non2()" style="margin-top: 5px"> <label> &nbsp
                            NON</label>
                    </div>
                    <div id="oui2" style="display: none">
                        <div class="row">
                            <div class="col-sm-12">
                                <textarea name="" id="" cols="30" rows="2" class="w-75" style="border-radius: 20px"
                                    placeholder="Dites nous en 3lignes maximum"></textarea>&nbsp
                                &nbsp
                            </div>
                        </div>
                    </div>
                    <div class=" form-group row">
                        <label for="">Avez-vous un ou des handicaps? </label>&nbsp &nbsp
                        <input type="radio" name="cloture" value="oui" onclick="oui3()" style="margin-top: 5px"> <label>
                            &nbsp OUI &nbsp &nbsp / &nbsp &nbsp</label>
                        <input type="radio" name="cloture" value="non" onclick="non3()" style="margin-top: 5px"> <label>
                            &nbsp NON</label>
                    </div>
                    <div id="oui3" style="display: none">
                        <div class="row">
                            <div class="col-sm-12">
                                <textarea name="" id="" cols="30" rows="2" class="w-75" style="border-radius: 20px"
                                    placeholder="Dites nous en 3lignes maximum"></textarea>&nbsp
                                    &nbsp &nbsp &nbsp
                            </div>
                        </div>
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
<?php $__env->stopSection(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function oui2() {
        document.getElementById('oui2').style.display = 'block';
    }

    function non2() {
        document.getElementById('oui2').style.display = 'none';
    }

    function oui3() {
        document.getElementById('oui3').style.display = 'block';
    }

    function non3() {
        document.getElementById('oui3').style.display = 'none';
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
    $('.chosen-select').chosen();

</script>

<?php echo $__env->make('jobs.jobs-account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Cible\cible_project1\resources\views/jobs/profile-jobs.blade.php ENDPATH**/ ?>