@extends('organisateurs.model-organisateurs-account')
@section('content-2')
<div class="container">

    <div class="row justify-content-center" style="margin-top: 7% ; margin-left:180px">

        <div class="col-xl-7 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row" >

          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Agence en vente !</h1>
              </div>
              <div class="text-center">
                <form  method="POST" action="">
                @csrf
                        <div class="form-group">   
                        <label for="">Sujet</label>                                                    
                        <input  name="Sujet" class="form-control form-control-user" value="" required  style="border-radius: 20px" placeholder="exemple : Agence de ciment en vente">
                        </div> 
                        {{-- type="number" min=0 max=5                                                   --}}
                        <div class="md-form">
                            <label for="">Description</label>
                            <textarea name="texte"  value="texte" required  min class="md-textarea form-control" rows="5"></textarea>                                                           
                        </div>
                    
                    <button type="submit"  class="btn btn-primary btn-user btn-block mt-4" >
                        Envoyez
                    </button>
              
                    </div>
                <hr>
                
              </form>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

  </div>
@endsection