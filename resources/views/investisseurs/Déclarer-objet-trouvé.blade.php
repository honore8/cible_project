@php
    $Var = "Declaration d'objet trouvé";
@endphp
@extends('investisseurs.investisseurs-account')
@section('content-4')
<br><br>  
<h3 class="text-center mt-4">Declaration d'objet trouvé </h3>
     <div class="formulaire d-flex justify-content-center">
       
      <form method="post" action="">  
        @csrf
<div class="row mt-5 container">
    <div class="col-md-5 offset-md-1">
        <label for="email">Nom de l'évènement</label>
        <input type="email" name="email" style="border-radius: 20px" class="form-control connex" id="email">
    </div>
    <div class="col-md-5 offset-md-1">
        <label for="adresse">Nom de l'objet</label>
        <input type="text" name="adresse" class="form-control connex" style="border-radius: 20px" required>
    </div>
    <div class="col-md-5 offset-md-1 my-xl-4">
    <label for="naissance">La date ou vous avez trouvé l'objet</label>
    <input type="date" name="date_naissance" class="form-control connex" style="border-radius: 50px" required>
    </div>
  <div class="col-md-5  offset-md-1">
    <br>
    <div class="d-flex justify-content-center">
      <label for="adresse"> Image </label>
    </div>
    
    <div class="custom-file "> 
      <input type="file" class="custom-file-input" id="" aria-describedby=""  style="border-radius: 20px">
      <label class="custom-file-label" for="inputGroupFile01">Une photo de l'objet trouvé</label>
    </div>
  </div>
  <div class="col-md-3 col-lg-6 offset-md-3">
    <br>
    <div class="d-flex justify-content-center">
        <label for="form103">Description</label>     
    </div> 
    <textarea id="form103" class="md-textarea form-control" rows="5" placeholder="Décrivez nous l'objet trouvé"></textarea>
  </div>
 
  <br>
  
  <div class="d-flex justify-content-center col-12 mt-4"><button type="submit" class="btn btn-primary col-4 ">Envoyez</button>
  </div>
</div>
</form>
</div>
      @endsection