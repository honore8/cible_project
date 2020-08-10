@extends('organisateurs.model-organisateurs-account')
@section('content-2')
<h3 class="text-center mt-4">Créer un évènement</h3>
     <div class="formulaire d-flex justify-content-center">      
      <form method="post" action="">  
        @csrf
<div class="row mt-5 container">
  
  <div class="col-md-5 ml-xl-5 offset-md-1">
    <label for="name">Nom</label>
    <input type="text" name="name"  class="form-control  connex"  style="border-radius: 20px">
  </div>
  <div class="col-md-5 offset-md-1">
    <label for="prenom">Adresse</label>
    <input type="text" name="prenom" class="form-control connex" style="border-radius: 20px">
  </div>
  <div class="col-md-5 ml-xl-5 offset-md-1">
    <label for="">Date de début</label>
    <input type="date" name="datedeb" class="form-control connex" style="border-radius: 50px" required>
  </div>
  <div class="col-md-5 offset-md-1">
    <label for="datefin">Date de fin</label>
    <input type="date" name="datefin" class="form-control connex" style="border-radius: 50px" required>
  </div>
  <div class="col-md-11 mx-sm-5">
    <label for="Catégorie">Catégorie d'évènements</label>
    <select name="Catégorie" id="Catégorie" class="form-control" style="border-radius: 20px" >
        <option selected >Choisir...</option>
        <option value="1">Formation (conférences, forums, colloques, séminaires, symposiums, conventions)</option>
        <option value="2">Formation (Formations)</option>
        <option value="3">Evènement grand public distraction (Concert, Comédie)</option>
        <option value="3">Evènement grand public distraction (Sport)</option>
        <option value="3">Evènement grand public distraction (Miss, défilé de mode)</option>
        <option value="3">Evènement grand public découverte (Foire, Luxe)</option>
        <option value="3">Evènement grand public découverte (Lancement officiel, salon)</option>
        <option value="3">Autres (Réalité virtuelle, théâtre, cinéma)</option>
      </select>
  </div> 
  <div class="col-md-3 ml-xl-5 offset-md-1">
    <label for="pays">Pays</label>
    <select name="exampleInputType" id="exampleInputType" class="js-example-basic-multiple form-control" multiple="multiple" style="border-radius: 20px" >
        @foreach ($pays as $item)
            <option value="liste">{{$item->countryname}}</option>
          @endforeach
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
      <label for="">Type d'évènements</label>
    <select name="exampleInputType" id="exampleInputType" class="form-control" style="border-radius: 20px" >
      <option selected > Choisir</option>
      <option value="Primaire">Payant</option>
      <option value="Collège">Gratuit social</option>
      <option value="Lycée">Gratuit professionnel</option> 
    </select>
  </div>
  <br>
 
  <div class="col-md-3 col-lg-6 offset-md-3">
    <br>
    <div class="d-flex justify-content-center">
        <label for="" > Description</label>                                                             
    </div>
    <div>
        <textarea name="texte"  value="texte" required  min class="md-textarea form-control" rows="5"></textarea>    
    </div>
  </div>
  <div class="d-flex justify-content-center col-12 mt-4"><button type="submit" class="btn btn-primary col-4 ">Valider</button>
  </div>
</div>
</form>
</div>

@endsection
