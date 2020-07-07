@php
    $Var = "Payement";
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
                <h1 class="h4 text-gray-900 mb-4">Choisir le mode de payement!</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card-body">
                        <a href="">
                            <img src="{{asset('images\flooz.jpg')}}" style="width: 215px; height: 85px">
                        </a>                   
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card-body">
                        <a href="">
                            <img src="{{asset('images\tmoney.jpg')}}" style="width: 211px; height: 85px">
                        </a>                       
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card-body">
                        <a href="">
                            <img src="{{asset('images\visa.jpg')}}" style="width: 213px; height: 69px">
                        </a>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="card-body">
                        <a href="">
                            <img src="{{asset('images\paypal.jpg')}}" style="width: 213px; height: 70px">
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
