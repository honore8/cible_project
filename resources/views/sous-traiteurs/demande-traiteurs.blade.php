@php
$Var = "Demande sous-traiteurs";
@endphp
@extends('sous-traiteurs.traiteurs-account')
@section('content-5')
    <br>
    <style>
        .card-img-top {
            top: 12%;
            width: 195px !important;
            height: 157px;
        }

        .card {
            margin-top: 37px;
            padding-top: 30px;
            margin-left: 9%;
            margin-bottom: 7%;
        }

    </style>

    <div class="container col-10  card ">
        <div class="form-group row">
            <div class="col-sm-6">
                <div class="col text-center" style="color: cornflowerblue">
                    <h5 style="font-size: 200%;margin-top:4%"><b>Demande de sous-traitance</b></h5>
                </div>
            </div>
            <div class="col-sm-6">
                <label for="" class="offset-10">Organisateurs</label>
                <div class="d-flex justify-content-end">
                    <img class="card-img-top img-square" src="images\avatar.png" alt="Card image cap">
                </div>
            </div>
        </div>
        <div class="card-body">
            <form method="POST" action="" name="" enctype='multipart/form-data'>
                @csrf
                <div class="form-group row">
                    <div id="ville" class="col-sm-6">
                        <label for="">Secteur concerné <b style="color: red">*</b></label><br>
                        <select value="" required autocomplete="" name="" id="ville"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">
                            <option value="">Choisir...</option>
                            <option value="">plongeurs</option>
                            <option value="">chef custo</option>
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="">Date limite de soumission <b style="color: red">*</b></label>
                        <input type="date" class="form-control " value="date-limite" required autocomplete="" name="limite"
                            style="border-radius: 20px;">
                    </div>
              
                </div>
                <div class="form-group row">
                    <div id="preuve" class="col-sm-6">
                        <label for="">Cahier de charge détaillé </label>
                        <input type="file" name="preuve" id="preuve"
                            style="width: 100%; padding: 3px;border: 1px solid #ccc;border-radius: 20px;" value="preuve">
                    </div>
                    <div id="date" class="col-sm-6">
                        <label for="">Téléphone <b style="color: red">*</b></label>
                        <input type="tel" class="form-control " value="telephone" required autocomplete="" name="telephone"
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
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic">
                                        <h5 class="text-center" > <b>Nombres de jours</b> </h5>
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
                            <a style="color: white" id="add_row" class="btn btn-primary float-right">Ajouter réseaux</a>
                        </div>
                    </fieldset>
                </div>
                <div class="form-group row">
                    <div id="pays" class="col-sm-4">
                        <label for="">Pays <b style="color: red">*</b></label>
                        <select value="" required autocomplete="" name="pays" id="pays"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">

                            <option value="">Choisir...</option>
                            <option value="">Togo</option>
                            <option value="">Ghana</option>

                        </select>
                    </div>
                    <div id="ville" class="col-sm-4">
                        <label for="">Ville <b style="color: red">*</b></label><br>
                        <select value="" required autocomplete="" name="" id="ville"
                            style="width: 100%; padding: 6px;border: 1px solid #ccc;border-radius: 20px;">
                            <option value="">Choisir...</option>
                            <option value="">Lome</option>
                            <option value="">Accra</option>
                        </select>
                    </div>
                    <div id="adresse" class="col-sm-4">
                        <label for="">Adresse <b style="color: red">*</b></label>
                        <input type="text" class="form-control " value="adresse" required autocomplete="" name="adresse"
                            style="border-radius: 20px;">
                    </div>
                    
                
                </div>
                <div class="form-group row">
              
                    <div class="col-sm-6">
                        <label for="">Montant<b style="color: red">*</b></label>
                        <input type="text" class="form-control " value="montant" required autocomplete="" name="montant"
                            style="border-radius: 20px;">
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