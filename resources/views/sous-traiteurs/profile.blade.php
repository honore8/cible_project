@extends('sous-traiteurs.traiteurs-account')
@section('content-5')
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
  <div class="col-md-3 col-lg-6 offset-md-3">
    <br>
    <div class="d-flex justify-content-center">
      <label for="">Secteur d'activité?</label>
    </div>
    
    <input type="text" name="zone_action" class="form-control connex" placeholder="Exemple: Infographiste" style="border-radius: 20px" required>
  </div>
  {{-- <div class="col-md-3 offset-md-1">
    <label for="ville">Investissement finacière?</label>
    <select name="niveau" id="niveau" class="form-control" style="border-radius: 20px">
      <option selected disabled> Choississez la tranche</option>
      <option value="Primaire">100000 - 500000</option>
      <option value="Primaire">500000 - 1000000</option>
      <option value="Primaire">1500000 - 2000000</option>
      <option value="Primaire">2500000 - 3000000</option>
    </select>
  </div>
  <div class="col-md-3 offset-md-1">
    <label for="adresse">Investissement matériel?</label>
    <select name="filière" id="filière" class="form-control" style="border-radius: 20px" >
      <option value="" selected>Choix</option>
      <option value="">Meubles</option>
      <option value="">matériels informatiques</option>
      <option value="">Bashes</option>
      <option value="">Autres</option>

    </select>
  </div> --}}
 
  {{-- <div class="col-md-3 col-lg-6 offset-md-3">
    <br>
    <div class="d-flex justify-content-center">
      <label for="adresse"> Vos réalisations?</label>
    </div>
    
    <div class="custom-file"> 
      <input type="file" class="custom-file-input" id="" aria-describedby=""  style="border-radius: 20px">
      <label class="custom-file-label" for="inputGroupFile01">Envoyez-nous vos réalisations en fichier pdf</label>
    </div>
  </div> --}}
  <div class="d-flex justify-content-center col-12 mt-4"><button type="submit" class="btn btn-primary col-4 ">Valider</button>
  </div>
</div>
</form>
</div>
@endsection
