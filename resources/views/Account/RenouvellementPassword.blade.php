@extends('layout')
@section('content')
<br><br>  
<div class="container mb-5 ">
    <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                    <div class="card">
                            <div class="card-header h2 test" style="background-color: #020e49">Renouvellement du mot de passe</div>

                            <div class="card-body">
                                    <form class="form-inline">
                                        <div class="form-group mb-2">
                                          <label for="email" class="col-md-6 col-form-label text-md-right">Email</label>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2">
                                          <label for="inputPassword2" class="sr-only">Password</label>
                                          <input type="password" class="form-control" id="inputPassword2" placeholder="">
                                        </div>
                                        <button type="submit" class="btn btn-primary mb-2" style="background-color: #020e49 ; border-color: #020e49">Lien de renouvellement</button>
                                       
                                      </form>
                                      <div class="card-action">
                                        <p class="top"><a href="{{url('Renouveller')}}">Apres renouvellement</a></p>
                                      </div>
                            </div>
                    </div>
            </div>
    </div>
</div>
{{-- Modal contacter --}}
    <div class="modal " id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header" style="background-color: #020e49">
              <h5 class="modal-title text-white">Contactez-nous</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="text-white">&times;</span>
              </button>
            </div> 
            <div class="modal-body">
              {{-- <p>Modal body text goes here.</p> --}}
              <form action="">
                <form>
                    <div class="form-group row">
                        <label for="nom" class="col-sm-3 col-form-label"><b>Nom</b></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="nom">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="prenom" class="col-sm-3 col-form-label"><b>Prenom</b></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="prenom">
                        </div>
                      </div>
                    <div class="form-group row">
                      <label for="inputEmail3" class="col-sm-3 col-form-label"><b>Email</b></label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="inputEmail3">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="text" class="col-sm-3 col-form-label"><b>Commentaire</b></label>
                      <div class="col-sm-9">
                          <textarea name="" id="text" class="form-control"></textarea>
                      </div>
                    </div> 
                <div class="form-group row ">
                      <div class="col-sm-12 d-flex">
                          <div class="mx-auto"> 
                            <button type="submit" class="btn btn-primary" style="background-color: #020e49 ; border-color: #020e49">Enregistrer</button>
                            <button type="button" class="btn btn-secondary bg-white" data-dismiss="modal" style="border-color: #020e49; color:#020e49">Fermer</button>
                          </div>
                        
                      </div>
                      
                    </div>
                  </form>
              </form>
            </div>
          </div>
        </div>
      </div>
      @endsection