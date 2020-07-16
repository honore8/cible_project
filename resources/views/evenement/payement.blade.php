@php
    $Var = "Paiement";
@endphp
@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-8 col-lg-12 col-md-12">
    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <div class="row">
          <div class="col-lg-12">
            <div class="p-8">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Choisir le mode de paiement!</h1>
              </div>
              <form class="form-row">
                  <div class="col-md-2 mx-auto">
                    <div class="card-body">
                        <a href="">
                            <img src="{{asset('images\flooz.png')}}" style="width: 50px; height: 50px">
                        </a>                   
                    </div>
                  </div>
                  <div class="col-md-2 mx-auto">
                    <div class="card-body">
                      <a href="">
                          <img src="{{asset('images\tmoney.png')}}" style="width: 50px; height: 50px">
                      </a>                       
                    </div>
                  </div>
                  <div class="col-md-2 mx-auto">
                    <div class="card-body ">
                      <a href="">
                          <img src="{{asset('images\visa.png')}}" style="width: 50px; height: 50px">
                      </a>
                    </div>
                  </div>                
                  <div class="col-md-2 mx-auto ">
                    <div class="card-body">
                      <a href="">
                          <img src="{{asset('images\paypal.png')}}" style="width: 50px; height: 50px">
                      </a>                   
                    </div>
                  </div>  
                  <div class="col-md-2 mx-auto">
                    <div class="card-body">
                      <a href="">
                          <img src="{{asset('images\Mastercard-logo.png')}}" style="width: 50px; height: 50px">
                      </a>                   
                    </div>
                  </div>     
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
