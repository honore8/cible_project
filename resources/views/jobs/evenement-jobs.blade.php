@php
    $Var = "Evènement";
@endphp
@extends('jobs.jobs-account')
@section('content-3')
<div class="container">
    <br><br>
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
                      <button type="submit" class="btn btn-primary" style="background-color: #020e49 ; border-color: #020e49"><a href="{{Url('payer')}}" style="color: aliceblue">Réserver</a> </button>
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
                        <button type="submit" class="btn btn-primary" style="background-color: #020e49 ; border-color: #020e49"><a href="{{Url('payer')}}" style="color: aliceblue">Réserver</a> </button>
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
                        <button type="submit" class="btn btn-primary" style="background-color: #020e49 ; border-color: #020e49"><a href="{{url('payer')}}" style="color: aliceblue">Réserver</a> </button>
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
@endsection