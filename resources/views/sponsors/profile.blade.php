@extends('sponsors.sponsors-account')
@section('content-2')
<h3 class="text-center mt-4">Completer votre profil</h3>
     <div class="formulaire d-flex justify-content-center">
       
      <form method="post" action="">
       
        @csrf
<div class="row mt-5 container">
  <div class="col-md-5 ml-xl-5 offset-md-1">
    <label for="name">Nom</label>
    <input type="text" name="name"  class="form-control  connex">
  </div>
  <div class="col-md-5 offset-md-1">
    <label for="prenom">Prenom</label>
    <input type="text" name="prenom" class="form-control connex">
  </div>
  <div class="col-md-5 ml-xl-5 offset-md-1">
    <label for="naissance">Date de naissance</label>
    <input type="date" name="date_naissance" class="form-control connex" required>
  </div>
  <div class="col-md-5 offset-md-1 genre">
    <label for="genre">Genre</label> <br>
    <input type="radio" name="genre" class="" id="masculin" value="masculin"> <span> Masculin </span> <br>
    <input type="radio" name="genre" class="" id="feminin" value="feminin"> <span> Féminin </span>
  </div>
  <div class="col-md-5 ml-xl-5 offset-md-1">
    <label for="telephone">Telephone</label>
    <input type="tel" name="telephone" class="form-control connex" id="telephone"  required>
  </div>
  <div class="col-md-5 offset-md-1">
    <label for="email">Email</label>
    <input type="email" name="email" readonly class="form-control connex" id="email">
  </div>
  <div class="col-md-3 ml-xl-5 offset-md-1">
    <label for="pays">Pays</label>
    <input type="text" name="pays" class="form-control connex" required>
  </div>
  <div class="col-md-3 offset-md-1">
    <label for="ville">Ville</label>
    <input type="text" name="ville" class="form-control connex" id="ville" required>
  </div>
  <div class="col-md-3 offset-md-1">
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" class="form-control connex" required>
  </div>
  <div class="col-md-5 ml-xl-5 offset-md-1">
    <label for="zone_action">Dans quel rayon souhaitez-vous être active ?</label>
    <input type="text" name="zone_action" class="form-control connex" placeholder="Exemple: 5km" required>
  </div>
  <div class="col-md-5 offset-md-1 genre">
    <label for="type">Quel type de professeur souhaitez-vous avoir ?</label> <br>
    <input type="radio" name="personnalite" class="" id="masculin" value="masculin"> <span> Homme </span> <br>
    <input type="radio" name="personnalite" class="" id="feminin" value="feminin"> <span> Femme </span>
  </div>
  <div class="col-md-3 ml-xl-5 offset-md-1">
    <label for="niveau">Quel est votre niveau d'étude ?</label>
    <select name="niveau" id="niveau" class="form-control">
      <option selected disabled> Choix</option>
      <option value="Primaire">Primaire</option>
      <option value="Collège">Collège</option>
      <option value="Lycée">Lycée</option>
      <option value="Université">Université</option>
    </select>
  </div>
  <div class="col-md-3 offset-md-1">
    <label for="classe" class="choix_classe" id="choix_classe">Choisissez votre classe</label> <br>
    <select class="niveau_2 offset-md-1" name="classe" id="show_primary" class="form-control">
      <option value="CP1" selected>CP1</option>
      <option value="CP2">CP2</option>
      <option value="CE1">CE1</option>
      <option value="CE2">CE2</option>
      <option value="CM1">CM1</option>
      <option value="CM2">CM2</option>
    </select>
    <select class="niveau_2" name="classe" id="show_college" class="form-control">
      <option value="6ème">6ème</option>
      <option value="5ème">5ème</option>
      <option value="4ème">4ème</option>
      <option value="3ème">3ème</option>
    </select>
    <select class="niveau_2" name="classe" id="show_lycee" class="form-control">
      <option value="2nd">2nd S</option>
      <option value="2nd">2nd A4</option>
      <option value="2nd">2nd G1</option>
      <option value="2nd">2nd G2</option>
      <option value="2nd">2nd G3</option>
      <option value="1ère">1ère D</option>
      <option value="1ère">1ère C</option>
      <option value="1ère">1ère A4</option>
      <option value="1ère">1ère G1</option>
      <option value="1ère">1ère G2</option>
      <option value="1ère">1ère G3</option>
      <option value="1ère">1ère F4</option>
      <option value="1ère">1ère F2</option>
      <option value="Tle">Tle A4</option>
      <option value="Tle">Tle D</option>
      <option value="Tle">Tle C</option>
      <option value="Tle">Tle G1</option>
      <option value="Tle">Tle G2</option>
      <option value="Tle">Tle G3</option>
      <option value="Tle">Tle F4</option>
      <option value="Tle">Tle F2</option>
    </select>
  </div>
  <div class="col-md-3 offset-md-1 niveau_2" id="show_univ">
    <label for="filière">Choisissez votre filière</label>
    <select name="filière" id="filière" class="form-control">
      <option value="filière" selected> Commerce</option>
      <option value="filière"> Langues</option>
      <option value="filière"> Médecine</option>
      <option value="filière"> Pharmacie</option>
      <option value="filière"> Programmation informatique</option>
      <option value="filière"> Finance & Banque</option>
      <option value="filière"> Audit & Controle de Gestion</option>
      <option value="filière"> Secrétariat</option>
      <option value="filière"> Marketing</option>
      <option value="filière"> Logistique & Transport</option>
      <option value="filière"> Droit</option>
      <option value="filière"> Biologie animale</option>
      <option value="filière"> Mathématiques</option>
      <option value="filière"> Physiques</option>
      <option value="filière"> Agronomie</option>
      <option value="filière"> Génie Mécanique</option>
      <option value="filière"> Génie civil</option>
      <option value="filière"> Génie électrique</option>
      <option value="filière"> Architecture d'intérieure</option>
      <option value="filière"> Lettre Moderne</option>
      <option value="filière"> Bureautique</option>
      <option value="filière"> Management</option>
    </select>
  </div>
  <div class="d-flex justify-content-center col-12 mt-4"><button type="submit" class="btn btn-primary col-4 ">Valider</button>
  </div>
</div>
</form>
</div>

@endsection
