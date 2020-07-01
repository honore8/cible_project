@php
    $Var = "Agence évènentielles";
@endphp
@extends('layout')
@section('content')
<div class="container">
    <br><br>
   <div class="row">
    <div class="col mb-4">
        <div class="card custom-card">
            <div class="card-header  text-center text-white custom-card-header"><h2>Agences évènentielles </h2> </div>
            <div class="card-body">
                {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.</p>
                <a href="#" class="btn btn-primary custom-btn btn-sm float-right text-white">Trouver</a> --}}
                <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-3">
                    <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1">
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                KP10is
                            </h5>
                            <div class="row mb-3">
                                <span class="col text-left custom-card-date">01/01/2020</span>
                                <span class="col text-right custom-card-date">Lomé,Togo</span>
                            </div>
                            {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p> --}}
                                <img src="images\img.png" alt="" style="max-width: 100%">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class=" mb-2 btn _btn_blue"><i class="fas fa-paper-plane-o ml-1 "><a class="test btn_blue" href="">Selectionner</a></i></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info<i class="fas fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1">
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                CERGI SA
                            </h5>
                            <div class="row mb-3">
                                <span class="col text-left custom-card-date">01/01/2020</span>
                                <span class="col text-right custom-card-date">Lomé,Togo</span>
                            </div>
                            {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p> --}}
                                <img src="images\img.png" alt="" style="max-width: 100%">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class=" mb-2 btn _btn_blue"><i class="fas fa-paper-plane-o ml-1 "><a class="test btn_blue" href="">Selectionner</a></i></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info<i class="fas fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1">
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                CIS-TOGO
                            </h5>
                            <div class="row mb-3">
                                <span class="col text-left custom-card-date">01/01/2020</span>
                                <span class="col text-right custom-card-date">Lomé,Togo</span>
                            </div>
                            {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p> --}}
                                <img src="images\img.png" alt="" style="max-width: 100%">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class=" mb-2 btn _btn_blue"><i class="fas fa-paper-plane-o ml-1 "><a class="test btn_blue" href="">Selectionner</a></i></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info<i class="fas fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-3">
                <div class="col mb-3">
                    <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1">
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                KP10is
                            </h5>
                            <div class="row mb-3">
                                <span class="col text-left custom-card-date">01/01/2020</span>
                                <span class="col text-right custom-card-date">Lomé,Togo</span>
                            </div>
                            {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p> --}}
                                <img src="images\img.png" alt="" style="max-width: 100%">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class=" mb-2 btn _btn_blue"><i class="fas fa-paper-plane-o ml-1 "><a class="test btn_blue" href="">Selectionner</a></i></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info<i class="fas fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1">
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                CERGI SA
                            </h5>
                            <div class="row mb-3">
                                <span class="col text-left custom-card-date">01/01/2020</span>
                                <span class="col text-right custom-card-date">Lomé,Togo</span>
                            </div>
                            {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p> --}}
                                <img src="images\img.png" alt="" style="max-width: 100%">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class=" mb-2 btn _btn_blue"><i class="fas fa-paper-plane-o ml-1 "><a class="test btn_blue" href="">Selectionner</a></i></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info<i class="fas fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="card pr-2 pl-2" style="background-color: #d1e2fc;">
                        <div class="card-body p-3">
                            <h5 class="card-title mb-1">
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                <span class="fa fa-sm fa-star" style="color: #f08832;"></span>
                                CIS-TOGO
                            </h5>
                            <div class="row mb-3">
                                <span class="col text-left custom-card-date">01/01/2020</span>
                                <span class="col text-right custom-card-date">Lomé,Togo</span>
                            </div>
                            {{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p> --}}
                                <img src="images\img.png" alt="" style="max-width: 100%">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class=" mb-2 btn _btn_blue"><i class="fas fa-paper-plane-o ml-1 "><a class="test btn_blue" href="">Selectionner</a></i></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info<i class="fas fa-paper-plane-o ml-1"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
   </div>
   <div class="row justify-content-end">
    <nav aria-label="Page navigation example " class="col-4">
        <ul class="pagination float-right">
          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
   </div>
          {{-- Modal Agence vente --}}
          <div class="modal " id="vendreModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header" style="background-color: #020e49">
                  <h5 class="modal-title text-white text-center">Renseignement sur votre Agence</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                  </button>
                </div> 
                <div class="modal-body">
                  {{-- <p>Modal body text goes here.</p> --}}
                  <form action="">
                    <form>
                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label "><b>Nom de l'agence</i></b></label>
                            {{-- <label for="nom" class="col-sm-2 col-form-label "><b><i class="fad fa-mobile float-right"></i></b></label> --}}
                            <div class="col-sm-8">
                              <input type="tel" class="form-control" id="nom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label "><b>Ancienneté</i></b></label>
                            {{-- <label for="nom" class="col-sm-2 col-form-label "><b><i class="fad fa-mobile float-right"></i></b></label> --}}
                            <div class="col-sm-8">
                              <input type="tel" class="form-control" id="nom">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-sm-4 col-form-label "><b>Téléphone</i></b></label>
                            {{-- <label for="nom" class="col-sm-2 col-form-label "><b><i class="fad fa-mobile float-right"></i></b></label> --}}
                            <div class="col-sm-8">
                              <input type="tel" class="form-control" id="nom">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-4 col-form-label"><b>Email</b></label>
                          <div class="col-sm-8">
                            <input type="email" class="form-control" id="inputEmail3">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="text" class="col-sm-4 col-form-label"><b>Secteur d'activité</b></label>
                            <div class="col-sm-8">
                                <textarea name="" id="text" class="form-control" placeholder="Decrivez votre Secteur d'activité en 3lignes"></textarea>
                            </div>
                          </div> 
                          <div class="form-group row">
                            <label for="text" class="col-sm-4 col-form-label"><b>Raison de vente</b></label>
                            <div class="col-sm-8">
                                <textarea name="" id="text" class="form-control" placeholder="Donnez nous les raisons en 3lignes"></textarea>
                            </div>
                          </div> 
                                                
                          <div class="form-group row">                          
                            <label for="pet-select" class="col-sm-4 col-form-label "><b>Pays</i></b></label>
                                  <select name="pets" id="pet-select" class="col-sm-8">
                                      <option value="">Choisir...</option>
                                      <option value="dog">Togo</option>
                                      <option value="cat">France</option>  
                                  </select>
                            </div>
                            <div class="form-group row">                          
                              <label for="pet-select" class="col-sm-4 col-form-label "><b>Ville</i></b></label>
                                    <select name="pets" id="pet-select" class="col-sm-8">
                                        <option value="">Choisir...</option>
                                        <option value="dog">Lome</option>
                                        <option value="cat">Paris</option>
                                        
                                    </select>
                              </div>
                         
                        <div class="form-group row ">
                          <div class="col-sm-12 d-flex">
                              <div class="mx-auto"> 
                                <button type="submit" class="btn btn-primary" style="background-color: #020e49 ; border-color: #020e49">Envoyez</button>
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
</div>

@endsection
