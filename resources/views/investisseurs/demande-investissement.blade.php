@php
$Var = "Evènement";
@endphp
@extends('investisseurs.investisseurs-account')
@section('content-4')
    <div class="container card ">
        <div class="col text-center" style="color: cornflowerblue">
            <h5 style="font-size: 200%;margin-top:4%"><b>Demande d'investissement/vente</b></h5>
        </div>
        <div class="card-body">

            <form method="POST" action="" name="Profil" enctype='multipart/form-data'>
                @csrf

                <div class="form-group row ">
                    <div id="Portefeuille" class="col-sm-6 ">
                        <label for="">Portefeuille clientèle</label>
                        <textarea name="" id="" cols="5" rows="5" class="w-100 " style="border-radius: 20px"
                            placeholder="Dites-nous en 3lignes " maxlength="50"></textarea>
                    </div>
                    <div id="partenaire" class="col-sm-6 ">
                        <label for="">Partenaires?</label>
                        <textarea name="" id="" cols="5" rows="5" class="w-100 " style="border-radius: 20px"
                            placeholder="Dites-nous en 3lignes" maxlength="50"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div id="carte" class="col-sm-6 ">
                        <label for="">Joindre le biographie du dirigeant en pdf <b style="color: red">*</b></label>
                        <input type="file" name="carte" id="carte"
                            style="width: 100%; padding: 3px;border: 1px solid #ccc;border-radius: 20px;" value="carte">
                    </div>
                    <div id="specialite" class="col-sm-6">
                        <label for="">Spécialité<b style="color: red">*</b></label>
                        <input type="text" class="form-control " value="Spécialité" required autocomplete=""
                            name="Spécialité" style="border-radius: 20px;">
                    </div>
                </div>
                <div class="form-group row ">
                    <div id="nom" class="col-sm-4 ">
                        <label for="">Statut de l'entreprise</label>
                        <input type="text" value="" required autocomplete="nom_demandeur" class="form-control" name="" id=""
                            style="border-radius: 20px;">
                    </div>
                    <div id="annee" class="col-sm-4">
                        <label for="">Année de création <b style="color: red">*</b></label>
                        <input type="date" class="form-control " value="annee" required autocomplete="" name="annee"
                            style="border-radius: 20px;">
                    </div>
                    <div class="col-sm-4">
                        <label for="">Téléphone <b style="color: red">*</b></label>
                        <input type="tel" class="form-control " value="" required autocomplete="" name="telephone"
                            style="border-radius: 20px;">
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-sm-6">
                        <label for="">Nombre d'actionnaires</label>
                        <input type="number" class="form-control" value="" required autocomplete="" name="qction"
                            style="border-radius: 20px;">
                    </div>
                    <div id="capital" class="col-sm-6 ">
                        <label for="">Capital de l'entreprise</label>
                        <input type="number" value="" required autocomplete="capital" class="form-control" name="capital"
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
                    <div class="col-sm-6">
                        <label for="">Ville <b style="color: red">*</b></label>
                        <input type="text" class="form-control " value="" required autocomplete="" name="ville"
                            style="border-radius: 20px;">

                    </div>

                </div>
                {{-- premier cadre --}}

                <div id="new1">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div id="experience">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic1"
                                        style="width: 103%">
                                        <h5 class="text-center"> <b>Chiffres des années précédentes </b> </h5>
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Année <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Chiffres d'affaire <b style="color: red">*</b>
                                                </th>


                                                <th class="text-center"
                                                    style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='addr0' data-id="0" class="hidden">
                                                <td data-name="annee">
                                                    <input type="text" name='annee[]' placeholder='année'
                                                        class="form-control"
                                                        style="border-color: cornflowerblue; border-radius: 20px" />
                                                </td>
                                                <td data-name="chiffres">
                                                    <input type="text" name='chiffres[]' placeholder='chiffres'
                                                        class="form-control"
                                                        style="border-color: cornflowerblue; border-radius: 20px" />
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
                                année</a>
                        </div>
                    </fieldset>
                </div>
                {{-- second cadre --}}
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