@extends('jobs.jobs-account')
@section('content-3')
<h3 class="text-center mt-4">Completer votre profil</h3>
     <div class="formulaire d-flex justify-content-center">
       
      <form method="post" action="">  
        @csrf
<div class="row mt-5 container">
  
  <div class="col-md-5 ml-xl-5 offset-md-1">
    <label for="name">Nom</label>
    <input type="text" name="name"  class="form-control  connex"  style="border-radius: 20px">
  </div>
  <div class="col-md-5 offset-md-1">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" class="form-control connex" style="border-radius: 20px">
  </div>
  <div class="col-md-5 ml-xl-5 offset-md-1">
    <label for="naissance">Date de naissance</label>
    <input type="date" name="date_naissance" class="form-control connex" style="border-radius: 50px" required>
  </div>
  <div class="col-md-5 offset-md-1">
    <label for="email">Email</label>
    <input type="email" name="email" style="border-radius: 20px" class="form-control connex" id="email">
  </div>
  <div class="col-md-5 ml-xl-5 offset-md-1">
    <label for="telephone">Telephone</label>
    <input type="tel" name="telephone" class="form-control connex" id="telephone" style="border-radius: 20px" required>
  </div>
  <div class="col-md-5 offset-md-5 offset-xl-1">
    <label for="telephone">Genre</label>
    <select name="niveau" id="niveau" class="form-control" style="border-radius: 20px">
      <option selected disabled> Choix</option>
      <option value="Primaire">Masculin</option>
      <option value="Primaire">Feminin</option>
    </select>
  </div>
 
  <div class="col-md-3 ml-xl-5 offset-md-1">
    <label for="pays">Pays</label>
    <select name="exampleInputType" id="exampleInputType" class="form-control" style="border-radius: 20px" >
      <option selected > Choisir votre pays</option>
      <option value="Primaire">TOGO</option>
      <option value="Collège">SENEGAL</option>
      <option value="Lycée">BENIN</option>
      <option value="Université">GHANA</option>
      <option value="Université">GABON</option>
    </select>
  </div>
  <div class="col-md-3 offset-md-1">
    <label for="ville">Ville</label>
    <select name="exampleInputType" id="exampleInputType" class="form-control" style="border-radius: 20px" >
      <option selected > Choix votre ville</option>
      <option value="Primaire">Lome</option>
      <option value="Collège">Dakar</option>
      <option value="Lycée">Cotonou</option>
      <option value="Université">Accra</option>
      <option value="Université">Libreville</option>
    </select>
  </div>
  <div class="col-md-3 offset-md-1">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" class="form-control connex" style="border-radius: 20px" required>
  </div>
  <br>
  <div class="col-md-5 ml-xl-5 offset-md-1 my-xl-4">
    <label for="">Profession</label>
    <input type="" name="" class="form-control connex" id="" style="border-radius: 20px" required>
  </div>
 
  <div class="col-md-5 offset-md-5 offset-xl-1">
    <br>
    <div class="d-flex justify-content-center">
      <label for="adresse"> Vos compétences?</label>
    </div>
    
    <div class="custom-file "> 
      <input type="file" class="custom-file-input" id="" aria-describedby=""  style="border-radius: 20px">
      <label class="custom-file-label" for="inputGroupFile01">Envoyez-nous votre cv en fichier pdf</label>
    </div>
  </div>
  <div class="d-flex justify-content-center col-12 mt-4"><button type="submit" class="btn btn-primary col-4 ">Valider</button>
  </div>
</div>
</form>
</div>
@endsection
<script language="JavaScript"> 
    $("#autre").show();

$("#liste").change(function(){
  if $(this).val()=="autre"
    $("#autre").show();
  else
  
    $("#autre").hide();
  
});
    </script>

