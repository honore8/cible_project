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
      @endsection