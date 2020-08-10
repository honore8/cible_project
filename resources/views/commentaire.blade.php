@extends('organisateurs.model-organisateurs-account')
@section('content-2')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">

          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Commentaire!</h1>
              </div>
              <div class="text-center">
                <form  method="POST" action="{{route('commenter')}}">
                @csrf
                        <div class="form-group">                                                       
          <input  name="note" class="form-control form-control-user" value="note" required  style="border-radius: 20px"  type="number" min=0 max=5
        placeholder="Note">

                        </div>                                                   
                        <div class="md-form">
                            <label for="">Votre message</label>
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
{{-- <h3 class="text-center mt-4">Completer votre profil</h3>
       <div class="modal " id="commentaireModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #020e49">
                    <h5 class="modal-title text-white text-center">Commentaire!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="text-white">×</span>
                    </button>
                </div> 
                <div class="modal-body">
                    
                        <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                    <form  method="POST" action="{{route('commenter')}}">
                                    @csrf
                                            <div class="form-group">                                                       
                              <input  name="note" class="form-control form-control-user" value="note" required  style="border-radius: 20px"  type="number" min=0 max=5
                            placeholder="Note">
                    
                                            </div>                                                   
                                            <div class="md-form">
                                                <label for="">Votre message</label>
                                                <textarea name="texte"  value="texte" required  min class="md-textarea form-control" rows="5"></textarea>                                                           
                                            </div>
                                        
                                        <button type="submit"  class="btn btn-primary btn-user btn-block" style="background-color: #020e49 ; border-color: #020e49">
                                            Envoyez
                                        </button>
                                  
                                        </div>
                        </div>
                    </div>
                </form>
                </div>
   
                </div>
            </div>
        </div> --}}
        @endsection