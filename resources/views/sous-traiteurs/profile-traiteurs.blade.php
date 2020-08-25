@php
    $Var = "profil traiteurs";
@endphp
@extends('sous-traiteurs.traiteurs-account')
@section('content-5')
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
    <div class="container col-12  card ">
        <img class="card-img-top img-circle rounded-circle" src="images\avatar.png" alt="Card image cap">
        <div class="col text-center" style="color: cornflowerblue">
            <h5 style="font-size: 200%;margin-top:4%"><b>Completer votre profil</b></h5>
        </div>
        <div class="card-body">
            
            <form method="POST" action="" name="Profil" enctype='multipart/form-data'>
                @csrf
                <div class="form-group row ">
                    <div id="raison" class="col-sm-6 ">
                        <label for="">Raison sociale <b style="color: red">*</b></label>
                        <input type="text" value="raison" required autocomplete="raison" class="form-control" name="raison"
                            id=""  style="border-radius: 20px;">
                    </div>
                    <div id="domaine" class="col-sm-6 ">
                        <label for="">Domaine <b style="color: red">*</b></label>
                        <input type="text" value="domaine" required autocomplete="domaine" class="form-control" name="domaine"
                            id="domaine"  style="border-radius: 20px;">
                    </div>
                </div>
                <div class="form-group row ">
                    <div class="col-sm-6">
                        <label for="">Année de création <b style="color: red">*</b></label>
                        <input type="text" class="form-control" value="annee" required autocomplete="annee" name="annee"
                            style="border-radius: 20px;">
                    </div>
                    <div id="email" class="col-sm-6 ">
                        <label for="">Email <b style="color: red">*</b></label>
                        <input type="text" value="" required autocomplete="email" class="form-control"
                            name="email"  style="border-radius: 20px;">
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
                    <div id="preuve" class="col-sm-6">
                        <label for="">Joindre une preuve de votre entreprise en pdf <b style="color: red">*</b></label>
                        <input type="file" name="preuve" id="preuve"
                            style="width: 100%; padding: 3px;border: 1px solid #ccc;border-radius: 20px;" value="preuve">
                    </div>
                    <div id="carte" class="col-sm-6 ">
                        <label for="">Joindre votre carte d'identité en pdf <b style="color: red">*</b></label>
                        <input type="file" name="carte" id="carte"
                        style="width: 100%; padding: 3px;border: 1px solid #ccc;border-radius: 20px;" value="carte">
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
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic1" style="width: 103%">
                                        <h5 class="text-center"> <b>Vos expériences passés </b> </h5>
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Evènements <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Années <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Téléphone <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Responsabilité <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Commentaire <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Satifaction Client <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center"
                                                    style="border-top: 1px solid #ffffff; border-right: 1px solid #ffffff;">
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id='addr0' data-id="0" class="hidden">
                                                <td data-name="évènement">
                                                    <input type="text" name='évènement[]' placeholder='Nom de lévènement'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="annee">
                                                    <input type="date" name='annee[]' placeholder='Année d\expérience'
                                                        class="form-control" style="border-color: cornflowerblue; border-radius: 20px"/>
                                                </td>
                                                <td data-name="telephone">
                                                    <input type="tel" name='telephone[]' placeholder='téléphone'
                                                        class="form-control" style="border-color: cornflowerblue; border-radius: 20px"/>
                                                </td>
                                                <td data-name="responsabilité">
                                                    <input type="text" name='responsabilité[]' placeholder='Poste occupé'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="commentaire">
                                                    <input type="text" name='commentaire[]' placeholder='Dites-nous en quelques lignes'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="satisfaction">
                                                    <input type="text" name='satisfaction[]'
                                                        placeholder='% de satisfaction du client' class="form-control" />
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
         
                {{-- second cadre --}}

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

                {{-- troisieme cadre --}}

                <div id="new2">
                    <fieldset
                        style="border: black solid 0.5px;margin-bottom: 15px; padding: 20px;margin: 0 auto 15px auto; ">
                        <legend style="width: auto !important; border: 1px solid black;border-radius: 20px;"> </legend>
                        <div id="experience">
                            <div class="row clearfix">
                                <div class="col-md-12 table-responsive">
                                    <table class="table table-bordered table-hover table-sortable" id="tab_logic2" style="width: 103%">
                                        <h5 class="text-center" > <b>Votre equipe </b> </h5>
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Noms <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Prenoms <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Titres <b style="color: red">*</b>
                                                </th>
                                                <th class="text-center">
                                                    Années d'expériences <b style="color: red">*</b>
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
                                                        placeholder='Nom du collaborateur' class="form-control" />
                                                </td>
                                                <td data-name="prenom">
                                                    <input type="text" name='prenom[]' placeholder='Prenom du collaborateur'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="titre">
                                                    <input type="text" name='titre[]' placeholder='Titre du collaborateur'
                                                        class="form-control" />
                                                </td>
                                                <td data-name="annee">
                                                    <input type="text" name='annee[]' placeholder='Année dexpérience'
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
                <div class="form-group row ">
                    <div id="materiel" class="col-sm-6">
                        <label for="">Votre matériel <b style="color: red">*</b></label>
                        <textarea name="" id="" cols="5" rows="5" class="w-100" style="border-radius: 20px" placeholder="exemple: Louche,Assiètte,Fourchette,etc...."></textarea>
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
  