@php
    $Var = "A propos";
@endphp
@extends('layout')
@section('content')
<h4 class="text-center my-5 __about propos"> <strong> A PROPOS DE NOUS </strong></h4>

<div class="d-flex justify-content-center">
    <div class="container _about">
        <p>Créée en novembre 2019 par des anciens boursiers d’excellence, la société KP10 IS a pour dessein parmi tant d’autres de contribuer au développement du monde éducatif. Elle propose les différents services tels qu’en :
        </p>
        <div class="row">
            <div class="col-md-6">
                <p> <i class="fas fa-circle propos"></i> Statistiques et Big Data :</p>
                <div class="ml-md-4 ml-2">
                    <p><i class="fas fa-check propos"></i> Analyse de données (Data mining, Text mining, Web mining)</p> 
                    <p><i class="fas fa-check propos"></i> Modélisation (financière, statistique, probabiliste, etc.)</p> 
                    <p><i class="fas fa-check propos"></i> Prédiction, Evaluation d’impact de projets</p> 
                    <p><i class="fas fa-check propos"></i> Etude de marché, Analyse des risques </p> 
                    <p><i class="fas fa-check propos"></i> Sondages, Conception de stratégie marketing</p> 
                </div>
            </div>
            <div class="col-md-6">
                <p> <i class="fas fa-circle propos"></i> Développement Informatique :</p>
                <div class="ml-md-4 ml-2">
                    <p><i class="fas fa-check propos"></i> La conception des sites web, des blogs</p> 
                    <p><i class="fas fa-check propos"></i> La conception des applications mobiles</p> 
                    <p><i class="fas fa-check propos"></i> La visualisation de données</p> 
                    <p><i class="fas fa-check propos"></i> Gestion de base de données</p> 
                    <p><i class="fas fa-check propos"></i> Conseil</p> 
                </div>
            </div>
        </div>
        <div class="row mt-md-5 mb-2">
            <div class="col-md-6">
                <p> <i class="fas fa-circle propos"></i> Infographie et design :</p>
                <div class="ml-md-4 ml-2">
                    <p><i class="fas fa-check propos"></i> Affiche publicitaire</p> 
                    <p><i class="fas fa-check propos"></i> Carte d’invitation</p> 
                    <p><i class="fas fa-check propos"></i> Calendrier et badge</p> 
                    <p><i class="fas fa-check propos"></i> Evénementiel</p> 
                    <p><i class="fas fa-check propos"></i> Magazine et livre</p> 
                    <p><i class="fas fa-check propos"></i> Kakemono / Plaquette</p> 
                    <p><i class="fas fa-check propos"></i> Sérigraphie / Edition</p> 
                    <p><i class="fas fa-check propos"></i> Création et gestion de page</p> 
                    <p><i class="fas fa-check propos"></i> Conception / Refonte de logo</p> 
                </div>
            </div>
            <div class="col-md-6">
                <p> <i class="fas fa-circle propos"></i> Maintenance Informatique :</p>
                <div class="ml-md-4 ml-2">
                    <p><i class="fas fa-check propos"></i> Audits et conseils</p> 
                    <p><i class="fas fa-check propos"></i> Contrat de maintenance</p> 
                    <p><i class="fas fa-check propos"></i> Gestion de messagerie</p> 
                    <p><i class="fas fa-check propos"></i> Infogérance, Installation des logiciels</p> 
                    <p><i class="fas fa-check propos"></i> Vidéo surveillance</p> 
                    <p><i class="fas fa-check propos"></i> Traceur GPS, Téléphonie sur IP</p> 
                    <p><i class="fas fa-check propos"></i> Sécurité Informatique</p> 
                    <p><i class="fas fa-check propos"></i> Sauvegardes et récupération de données</p> 
                    <p><i class="fas fa-check propos"></i> Déploiement et migration des postes et des serveurs</p> 
                </div>   
            </div>
        </div>
        <p>
        Depuis la création de l’entreprise, nous travaillons sur des projets internes (projets innovants) répondant aux besoins de la société et sur des projets externes. Nous couvrons des besoins informatiques et analytiques des entreprises, sociétés, et particuliers. 
        </p>
        <p>
        Etant donné que notre bonheur dépend de celui des clients, nous prônons des solutions adéquates à leurs problèmes et ceci dans un bref délai. La rapidité et la qualité sont notre point fort.
        </p>
        <p>
        Avez-vous besoin des solutions informatiques ou statistiques ? N’hésitez pas à nous contacter au +228 910 159 80/+228 910 161 47 ou de visiter notre site internet <a href="{{url('https://kp10is.com/index.php')}}">www.kp10is.com</a>. 
        </p>
    </div>
</div>  
@endsection