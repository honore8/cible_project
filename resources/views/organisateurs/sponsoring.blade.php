@extends('organisateurs.model-organisateurs-account')
@section('content-2')
<div class="container">
    <br><br>
   <div class="row">
    <div class="col mb-4">
        <div class="card custom-card">
            <div class="card-header  text-center  "><h2 style="color:  #020e49 ">Agences évènentielles </h2> </div>
            <div class="card-body">
                
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
                           
                                <img src="images\img.png" alt="" style="max-width: 100%">
                        </div>
                        <div class="d-flex justify-content-center">
                           <button class=" mb-2 badge-primary btn  ml-2 "  data-toggle="modal" data-target="#contactModal"> <a style="color: aliceblue">Contacter</a> </button>
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
                                <img src="images\img.png" alt="" style="max-width: 100%">
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class=" mb-2 badge-primary btn  ml-2 "  data-toggle="modal" data-target="#contactModal"> <a style="color: aliceblue">Contacter</a> </button>
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
                            <button class=" mb-2 badge-primary btn  ml-2 "  data-toggle="modal" data-target="#contactModal"> <a style="color: aliceblue">Contacter</a> </button>
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
  </div>
</div>
{{-- Modal contact sponsor --}}
<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header"style="background-color:#3f48cc">
          <h5 class="modal-title text-white text-center" id="exampleModalLabel">Agence KP10IS</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
             <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
        </div>
        <div class="modal-footer">            
          <a class="btn btn-primary" href="{{Url('')}}">Valider</a>
        </div>
      </div>
    </div>
  </div> 
@endsection
