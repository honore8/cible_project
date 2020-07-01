@php
    $Var = "Tarification";
@endphp
@extends('layout')
@section('content')
<h4 class="text-center my-5 __about propos"> <strong> TARIFICATION </strong></h4>

<div class="d-flex justify-content-center">
    <div class="container _about">
        <div class="row">
            <div class="col-md-6">
                <p> <i class="fas fa-circle propos"></i> Evènement payant :</p>
                <div class="ml-md-4 ml-2">
                    <p><i class="fas fa-check propos"></i>3% du prix du ticket lorsque nous ne sommes pas chargés de couvrir la communication autour de l’évènement.</p> 
                    <p><i class="fas fa-check propos"></i>2% du prix du ticket si l’agence nous confie la communication autour de l’évènement.</p> 
                </div>
            </div>
            <div class="col-md-6">
                <p> <i class="fas fa-circle propos"></i> Evènement gratuit SOCIAL :</p>
                <div class="ml-md-4 ml-2">
                    <p><i class="fas fa-check propos"></i>0 FCFA si nous couvrons la communication autour de l’évènement pour les réservations. </p> 
                    <p><i class="fas fa-check propos"></i>Les organisateurs paieront 20 FCFA par place sollicitée.</p> 
                </div>
            </div>
        </div>
        <div class="row mt-md-5 mb-2">
            <div class="col-md-6">
                <p> <i class="fas fa-circle propos"></i> Evènement gratuit PRO :</p>
                <div class="ml-md-4 ml-2">
                    <p><i class="fas fa-check propos"></i>Les participants paieront 100 FCFA pour réserver leur place si nous prenons en charge la communication autour de l’évènement</p> 
                    <p><i class="fas fa-check propos"></i>Les participants paieront 300 FCFA pour réserver leur place si nous ne prenons pas en charge la communication autour de l’évènement</p> 
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection