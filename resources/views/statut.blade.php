@php
    $Var = "Statut";
@endphp
@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Statut!</h1>
              </div>
              <form class="user">
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mot de passe"> 
                  <select name="exampleInputType" id="exampleInputType" class="form-control" style="border-radius: 20px" >
                    <option selected > Choisir...</option>
                    <option value="Primaire">Individu</option>
                    <option value="Collège">Entreprise</option>
                  </select>
                </div> 
                <a href="" class="btn btn-primary btn-user btn-block" style="background-color: #020e49 ; border-color: #020e49">
                  Envoyez
                </a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>
@endsection