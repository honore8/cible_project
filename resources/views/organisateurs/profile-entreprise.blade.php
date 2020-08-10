@extends('organisateurs.model-organisateurs-account')
@section('content-2')
<h3 class="text-center mt-4">Completer votre profil</h3>
     <div class="formulaire d-flex justify-content-center">
       
      <form method="post" action="{{route('saveEntreprise')}}">  
        <div class="row mt-5 container">
  
            <div class="col-md-5 ml-xl-5 offset-md-1">
              <label for="name">Raison sociale</label>
              <input type="text" name="raison"  class="form-control  connex"  style="border-radius: 20px">
            </div>
            <div class="col-md-5 offset-md-1">
              <label for="prenom">Téléphone</label>
              <input type="text" name="telephone" class="form-control connex" style="border-radius: 20px">
            </div>
            <div class="col-md-5 ml-xl-5 offset-md-1">
                <label for="">Secteur d'activité</label>
                <input type="" name="activite" class="form-control connex" style="border-radius: 50px" required>
              </div>
              <div class="col-md-5 offset-md-1">
                <label for="email">Email</label>
                <input type="email" name="email" style="border-radius: 20px" class="form-control connex" value="{{Auth::user(}->email}} readonly">
              </div>
              <div class="col-md-5 ml-xl-5 offset-md-1">
                <label for="telephone">Statut juridique</label>
                <input type="tel" name="statut" class="form-control connex" id="telephone" style="border-radius: 20px" required>
              </div>
              <div class="col-md-5 offset-md-5 offset-xl-1">
                <label for="telephone">Numéro d'immatriculation</label>
                <input type="tel" name="num" class="form-control connex" id="telephone" style="border-radius: 20px" required>
              </div>
              <div class="col-md-5 ml-xl-5 offset-md-1">
                <label for="pays">Pays</label>
                <select name="pays" id="ville" class="form-control" style="border-radius: 20px" >
                  <option selected > Choisir votre pays</option>
                  @foreach($countrys as country)
                  <option value="{{country.countrycode}}">{{$country.countryname}}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-5 offset-md-5 offset-xl-1">
                <label for="ville">Ville</label>
                <select name="ville" id="ville" class="form-control" style="border-radius: 20px" >
                  <option selected > Choix votre ville</option>
                  <option >Lome</option>
                  <option>Dakar</option>
                  <option >Cotonou</option>
                  <option>Accra</option>
                  <option >Libreville</option>
                </select>
              </div>
              <div class="col-md-3 col-lg-6 offset-md-3">
                <br>
                <div class="d-flex justify-content-center">
                  <label for="adresse"> Vos réalisations?</label>
                </div>
                
                <div class="custom-file "> 
                  <input type="file" class="custom-file-input" name="fichier" aria-describedby=""  style="border-radius: 20px">
                  <label class="custom-file-label" for="inputGroupFile01">Envoyez-nous vos réalisations passé en fichier pdf</label>
                </div>
              </div>
              <div class="d-flex justify-content-center col-12 mt-4"><button type="submit" class="btn btn-primary col-4 ">Valider</button>
              </div>
            </div>
            </form>
        </div>

@endsection
