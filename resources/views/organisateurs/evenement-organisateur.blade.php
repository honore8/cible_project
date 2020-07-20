@php
    $Var = "Evènement organisateurs";
@endphp
@extends('organisateurs.model-organisateurs-account')
@section('content-2') 
<br>
<div class="row justify-content-end ">
<nav aria-label="Page navigation example" class="col-4">
  <ul class="pagination ">
    <li class="page-item">
    </li>
    <li class="page-item"><a class="page-link" href="#section1">1</a></li>
    <li class="page-item"><a class="page-link" href="#section2">2</a></li>
    <li class="page-item"><a class="page-link" href="#section3">3</a></li>
    <li class="page-item"><a class="page-link" href="#section4">4</a></li>
    <li class="page-item"><a class="page-link" href="#section5">5</a></li>
    <li class="page-item"><a class="page-link" href="#section6">6</a></li>
    <li class="page-item"><a class="page-link" href="#section7">7</a></li>
    <li class="page-item"><a class="page-link" href="#section8">8</a></li>
    <li class="page-item">
    </li>
  </ul>
</nav>
</div>
<div class="row offset-lg-1">     
  <div class="col-md-2 col-3" >
    <hr class="ligne" id="section1">
  </div>
  <div class=" col-md-7 cercle col-6"  style="text-align: center " >
    <h3 class="test template mt-2"><b>Conférences, forums, colloques, séminaires, symposiums, conventions</b></h3> 
  </div>
  <div class=" col-md-2 col-3">
    <hr class="ligne">
  </div>
</div >
<div class="container">
    <br>
    <div class="row row-cols-1 row-cols-md-3" style="top: 10%">
    <div class="col mb-4">
      <div class="card card-cascade narrower">
        <div class="view view-cascade overlay">
          <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
            alt="narrower">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade">
          <h4 class="card-title ">Color run</h4>
          <h5 class=""><i class="">Palais des congrès</i></h5> 
          <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
          <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
              Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
               Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
            <div class="form-group row ">
                <div class="col-sm-12 d-flex">
                    <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Investir</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                    </div>                  
                </div>                     
              </div>
        </div>
      </div>
    </div>  
    <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                      </div>                  
                  </div>                     
                </div>
          </div>
        </div>
      </div> 
      <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
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
</div>
<div class="row offset-lg-1">     
  <div class="col-md-2 col-3" >
    <hr class="ligne" id="section2">
  </div>
  <div class=" col-md-7 cercle col-6"  style="text-align: center " >
    <h3 class="test template mt-2"><b>Formations</b></h3> 
  </div>
  <div class=" col-md-2 col-3">
    <hr class="ligne">
  </div>
</div >
<div class="container">
    <br>
    <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card card-cascade narrower">
        <div class="view view-cascade overlay">
          <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
            alt="narrower">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade">
          <h4 class="card-title ">Color run</h4>
          <h5 class=""><i class="">Palais des congrès</i></h5> 
          <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
          <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
              Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
               Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
            <div class="form-group row ">
                <div class="col-sm-12 d-flex">
                    <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal" style="border-color: #020e49; color:#020e49">Voir plus</a>
                    </div>                  
                </div>                     
              </div>
        </div>
      </div>
    </div>  
    <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                      </div>                  
                  </div>                     
                </div>
          </div>
        </div>
      </div> 
      <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
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
</div>
<div class="row offset-lg-1">     
  <div class="col-md-2 col-3" >
    <hr class="ligne" id="section3">
  </div>
  <div class=" col-md-7 cercle col-6"  style="text-align: center " >
    <h3 class="test template mt-2"><b>Concert,comédie</b></h3> 
  </div>
  <div class=" col-md-2 col-3">
    <hr class="ligne">
  </div>
</div >
<div class="container">
    <br>
    <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card card-cascade narrower">
        <div class="view view-cascade overlay">
          <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
            alt="narrower">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade">
          <h4 class="card-title ">Color run</h4>
          <h5 class=""><i class="">Palais des congrès</i></h5> 
          <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
          <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
              Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
               Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
            <div class="form-group row ">
                <div class="col-sm-12 d-flex">
                    <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                    </div>                  
                </div>                     
              </div>
        </div>
      </div>
    </div>  
    <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                      </div>                  
                  </div>                     
                </div>
          </div>
        </div>
      </div> 
      <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
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
</div>
<div class="row offset-lg-1">     
  <div class="col-md-2 col-3" >
    <hr class="ligne" id="section4">
  </div>
  <div class=" col-md-7 cercle col-6"  style="text-align: center " >
    <h3 class="test template mt-2"><b>Sport</b></h3> 
  </div>
  <div class=" col-md-2 col-3">
    <hr class="ligne">
  </div>
</div >
<div class="container">
    <br>
    <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card card-cascade narrower">
        <div class="view view-cascade overlay">
          <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
            alt="narrower">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade">
          <h4 class="card-title ">Color run</h4>
          <h5 class=""><i class="">Palais des congrès</i></h5> 
          <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
          <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
              Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
               Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
            <div class="form-group row ">
                <div class="col-sm-12 d-flex">
                    <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                    </div>                  
                </div>                     
              </div>
        </div>
      </div>
    </div>  
    <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                      </div>                  
                  </div>                     
                </div>
          </div>
        </div>
      </div> 
      <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
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
</div>
<div class="row offset-lg-1">     
  <div class="col-md-2 col-3" >
    <hr class="ligne" id="section5">
  </div>
  <div class=" col-md-7 cercle col-6"  style="text-align: center " >
    <h3 class="test template mt-2"><b>Miss, défilé de mode</b></h3> 
  </div>
  <div class=" col-md-2 col-3">
    <hr class="ligne">
  </div>
</div >
<div class="container">
    <br>
    <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card card-cascade narrower">
        <div class="view view-cascade overlay">
          <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
            alt="narrower">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade">
          <h4 class="card-title ">Color run</h4>
          <h5 class=""><i class="">Palais des congrès</i></h5> 
          <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
          <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
              Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
               Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
            <div class="form-group row ">
                <div class="col-sm-12 d-flex">
                    <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                    </div>                  
                </div>                     
              </div>
        </div>
      </div>
    </div>  
    <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                      </div>                  
                  </div>                     
                </div>
          </div>
        </div>
      </div> 
      <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
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
</div>
<div class="row offset-lg-1">     
  <div class="col-md-2 col-3" >
    <hr class="ligne" id="section6">
  </div>
  <div class=" col-md-7 cercle col-6"  style="text-align: center " >
    <h3 class="test template mt-2"><b>Foire,Luxe</b></h3> 
  </div>
  <div class=" col-md-2 col-3">
    <hr class="ligne">
  </div>
</div >
<div class="container">
    <br>
    <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card card-cascade narrower">
        <div class="view view-cascade overlay">
          <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
            alt="narrower">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade">
          <h4 class="card-title ">Color run</h4>
          <h5 class=""><i class="">Palais des congrès</i></h5> 
          <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
          <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
              Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
               Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
            <div class="form-group row ">
                <div class="col-sm-12 d-flex">
                    <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                    </div>                  
                </div>                     
              </div>
        </div>
      </div>
    </div>  
    <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                      </div>                  
                  </div>                     
                </div>
          </div>
        </div>
      </div> 
      <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
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
</div>
<div class="row offset-lg-1">     
  <div class="col-md-2 col-3" >
    <hr class="ligne" id="section7">
  </div>
  <div class=" col-md-7 cercle col-6"  style="text-align: center " >
    <h3 class="test template mt-2"><b>Lancement officiel, salon</b></h3> 
  </div>
  <div class=" col-md-2 col-3">
    <hr class="ligne">
  </div>
</div >
<div class="container">
    <br>
    <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card card-cascade narrower">
        <div class="view view-cascade overlay">
          <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
            alt="narrower">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade">
          <h4 class="card-title ">Color run</h4>
          <h5 class=""><i class="">Palais des congrès</i></h5> 
          <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
          <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
              Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
               Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
            <div class="form-group row ">
                <div class="col-sm-12 d-flex">
                    <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                    </div>                  
                </div>                     
              </div>
        </div>
      </div>
    </div>  
    <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                      </div>                  
                  </div>                     
                </div>
          </div>
        </div>
      </div> 
      <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
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
</div>
<div class="row offset-lg-1">     
  <div class="col-md-2 col-3" >
    <hr class="ligne" id="section8">
  </div>
  <div class=" col-md-7 cercle col-6"  style="text-align: center " >
    <h3 class="test template mt-2"><b>Réalité virtuelle, théâtre, cinéma</b></h3> 
  </div>
  <div class=" col-md-2 col-3">
    <hr class="ligne">
  </div>
</div >
<div class="container">
    <br>
    <div class="row row-cols-1 row-cols-md-3">
    <div class="col mb-4">
      <div class="card card-cascade narrower">
        <div class="view view-cascade overlay">
          <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
            alt="narrower">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <div class="card-body card-body-cascade">
          <h4 class="card-title ">Color run</h4>
          <h5 class=""><i class="">Palais des congrès</i></h5> 
          <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
          <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
              Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
               Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
            <div class="form-group row ">
                <div class="col-sm-12 d-flex">
                    <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
                    </div>                  
                </div>                     
              </div>
        </div>
      </div>
    </div>  
    <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal" style="border-color: #020e49; color:#020e49">Voir plus</a>
                      </div>                  
                  </div>                     
                </div>
          </div>
        </div>
      </div> 
      <div class="col mb-4">
        <div class="card card-cascade narrower">
          <div class="view view-cascade overlay">
            <img src="{{asset('images\imagecolor.jpg')}}" class="card-img-top"
              alt="narrower">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
          <div class="card-body card-body-cascade">
            <h4 class="card-title ">Color run</h4>
            <h5 class=""><i class="">Palais des congrès</i></h5> 
            <h6 class="pink-text"><i class="">2500fcfa  5000fcfa</i></h6> 
            <p class="card-text">L’événement tant attendu pour ces congés de Noël aura lieu le 28 décembre. 
                Une foule immense de 2 à 3 mille personnes est attendue pour une première édition de la plus noble des courses organisées.
                 Le groupe du ‘Color Run Lomé’ en collaboration avec le groupe Max Events, organise une course contre le cancer de sein..</p>
              <div class="form-group row ">
                  <div class="col-sm-12 d-flex">
                      <div class="mx-auto"> 
                        <a class="btn btn-primary" href="" style="background-color: #020e49 ; border-color: #020e49">Réserver</a>
                        <a class="btn btn-secondary bg-white" data-toggle="modal" data-target="#infoModal"  style="border-color: #020e49; color:#020e49">Voir plus</a>
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
     {{-- Modal plus dinfo --}}
     <div class="modal " id="infoModal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #020e49">
            <h5 class="modal-title text-white text-center">Les informations sur l'évènement!</h5>
          </div> 
          <div class="modal-body">
            <form action="">
              <div class="col-lg-12">
                  <div class="p-5">
                    <div class="text-center">
                    <form class="user">
                          <p >This is a longer card with supporting text below as a natural lead-in to
                          additional content. This content is a little bit longer.This is a longer card with supporting text below as a natural lead-in to
                          additional content. This content is a little bit longer.This is a longer card with supporting text below as a natural lead-in to
                          additional content. This content is a little bit longer.This is a longer card with supporting text below as a natural lead-in to
                          additional content. This content is a little bit longer.</p> 
                        <button type="button" class="btn btn-secondary bg-white" data-dismiss="modal" style="border-color: #020e49; color:#020e49">Fermer</button>
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

@endsection
