@extends('organisateurs.model-organisateurs-account')
@section('content-2')
<h3 class="text-center mt-4">Completer votre profil</h3>
     <div class="formulaire d-flex justify-content-center">
       
      <form method="post" action="{{route('savePersonne'}}}">  
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
    <input type="date" name="date_nais" class="form-control connex" style="border-radius: 50px" required>
  </div>
  <div class="col-md-5 offset-md-1">
    <label for="email">Email</label>
    <input type="email" name="email" style="border-radius: 20px" class="form-control connex" value="{{Auth::user(}->email}} readonly">
  </div>
  <div class="col-md-5 ml-xl-5 offset-md-1">
    <label for="telephone">Telephone</label>
    <input type="tel" name="telephone" class="form-control connex" id="telephone" style="border-radius: 20px" required>
  </div>
  <div class="col-md-5 offset-md-5 offset-xl-1">
    <label for="telephone">Genre</label>
    <select name="sexe" id="niveau" class="form-control" style="border-radius: 20px">
      <option selected disabled> Choix</option>
      <option value="G">Masculin</option>
      <option value="F">Feminin</option>
    </select>
  </div>
 
  <div class="col-md-3 ml-xl-5 offset-md-1">
    <label for="pays">Pays</label>

    <select name="pays" id="exampleInputType" class="form-control" style="border-radius: 20px" >
      <option selected > Choisir votre pays</option>
       @foreach($countrys as country)
                  <option value="{{country.countrycode}}">{{$country.countryname}}</option>
                  @endforeach
    </select>
  </div>
  <div class="col-md-3 offset-md-1">
    <label for="ville">Ville</label>
    <select name="ville" id="exampleInputType" class="form-control" style="border-radius: 20px" >
      <option selected > Choix votre ville</option>
      <option >Lome</option>
      <option>Dakar</option>
      <option >Cotonou</option>
      <option >Accra</option>
      <option >Libreville</option>
    </select>
  </div>
  <div class="col-md-3 offset-md-1">
    <label for="Profession">Profession</label>
    <input type="text" name="Profession" class="form-control connex" style="border-radius: 20px" required>
  </div>
  <br>
  <div class="col-md-5 ml-xl-5 offset-md-1 my-xl-4">
    <label for="">Adresse</label>
    <input type="" name="adresse" class="form-control connex" id="" style="border-radius: 20px" required>
  </div>
 
  <div class="col-md-5 offset-md-5 offset-xl-1">
    <br>
    <div class="d-flex justify-content-center">
      <label for="adresse"> Vos compétences?</label>
    </div>
    
    <div class="custom-file "> 
      <input type="file" name="piece_jointe" class="custom-file-input" id="" aria-describedby=""  style="border-radius: 20px">
      <label class="custom-file-label" for="inputGroupFile01">Envoyez-nous votre cv en fichier pdf</label>
    </div>
  </div>
  <div class="d-flex justify-content-center col-12 mt-4"><button type="submit" class="btn btn-primary col-4 ">Valider</button>
  </div>
</div>
</form>
</div>
<script type="text/javascript">
$("#date").on('click', function(){
  
       ;
         if(( Date.now().getFullYear() - $("#date").val().getFullYear())>13 ||Date.now().getFullYear() - $("#date").val().getFullYear())<99)
         {
           alert('Nous ne pensons pas que vous pouvez utiliser cette application. Merci de votre comprehension');
           $("#date").val("");
         }
    }
 
</script>
@endsection