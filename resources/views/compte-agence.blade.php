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
                            <button class=" mb-2 btn _btn_blue"><a class="test btn_blue" href="">Selectionner</a></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info</button>
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
                            <button class=" mb-2 btn _btn_blue"><a class="test btn_blue" href="">Selectionner</a></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info</button>
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
                            <button class=" mb-2 btn _btn_blue"><a class="test btn_blue" href="">Selectionner</a></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info</button>
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
                            <button class=" mb-2 btn _btn_blue"><a class="test btn_blue" href="">Selectionner</a></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info</button>
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
                            <button class=" mb-2 btn _btn_blue"><a class="test btn_blue" href="">Selectionner</a></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info</button>
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
                            <button class=" mb-2 btn _btn_blue"><a class="test btn_blue" href="">Selectionner</a></button>
                            <button class=" mb-2 btn _btn_blue ml-2 btn_blue" data-toggle="modal" data-target="#vendreModal"> Plus d'info</button>
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
                  <h5 class="modal-title text-white text-center">Parlez-nous de votre Agence!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                  </button>
                </div> 
                <div class="modal-body">
                  <form action="">
                    <div class="col-lg-12">
                        <div class="p-5">
                          <div class="text-center">
                          <form class="user">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0" >
                                    <input type="text" class="form-control form-control-user"  style="border-radius: 20px" id="exampleFirstName" placeholder="Nom de l'agence">
                                  </div>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user"  style="border-radius: 20px" id="exampleLastName" placeholder="Ancienneté">
                                  </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="tel" class="form-control form-control-user"  style="border-radius: 20px" id="exampleInputEmail" placeholder="Téléphone">
                                </div>
                                <div class="col-sm-6">
                                    <input type="tel" class="form-control form-control-user"  style="border-radius: 20px" id="exampleInputEmail" placeholder="Nombres de personnes">
                                </div>
                              </div>
                              <div class="form-group">
                                
                                <input name="" id="text" class="form-control form-control-user"  style="border-radius: 20px" id="exampleInputPassword" 
                                  placeholder="Decrivez votre Secteur d'activité en 1lignes">
                              </div>
                              <div class="form-group">
                         
                                <input name="" id="text" class="form-control form-control-user"  style="border-radius: 20px" id="exampleInputPassword" 
                                  placeholder="Dites nous les raisons de vente 1lignes">
                              </div>
                               
                              <div class="form-group">
                                {{-- <input type="" class="form-control form-control-user" id="exampleInputType" placeholder="Profil"> --}}
                                <select name="exampleInputType" id="exampleInputType" class="form-control" style="border-radius: 20px" >
                                  <option selected > Choisir votre pays</option>
                                  <option value="Primaire">TOGO</option>
                                  <option value="Collège">SENEGAL</option>
                                  <option value="Lycée">BENIN</option>
                                  <option value="Université">GHANA</option>
                                  <option value="Université">GABON</option>
                                </select>
                              </div>
                              <div class="form-group">
                                {{-- <input type="" class="form-control form-control-user" id="exampleInputType" placeholder="Profil"> --}}
                                <select name="exampleInputType" id="exampleInputType" class="form-control" style="border-radius: 20px" >
                                  <option selected > Choix votre ville</option>
                                  <option value="Primaire">Lome</option>
                                  <option value="Collège">Dakar</option>
                                  <option value="Lycée">Cotonou</option>
                                  <option value="Université">Accra</option>
                                  <option value="Université">Libreville</option>
                                </select>
                              </div>
                            <a href="" class="btn btn-primary btn-user btn-block" style="background-color: #020e49 ; border-color: #020e49 ">
                              Envoyez
                            </a>
                          </form>
                          </div>
                    </div>
                  </div>
                </form>
                </div>
                    
                  
                </div>
              </div>
            </div>
          </div>
</div>

@endsection
