<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','welcome');
// Route::get('/agences', [ 'uses' => 'AgenceController@index']);


Route::view('signaler','layouts.SignalerEvenement');
Route::view('signalement','layouts.SignalerVideo');
Route::view('Declaration','layouts.DeclarationPerte');
Route::view('Reserver','layouts.ReservationTicket');
Route::view('Sondage','layouts.Sondage');
Route::view('menu','layouts.model-organisateurs-account');
Route::view('liste','layouts.listeextras');



Route::view('menusparticipants','participants.participants-account');
Route::view('perteparticipants','participants.DeclarationPerte');
Route::view('reservationparticipants','evenement.reservation');

Route::view('reservationparticipant','participants.reservation');


Route::view('profile5','participants.profile');


// agence evenementielle
Route::view('agence','agence.compte-agence');
Route::view('info','agence.info');
Route::view('payer','evenement.payement');

// Acceuil
Route::view('proposdenous','Apropos');
Route::view('fonctionnement','Fonctionnement');
Route::view('tarification','Tarification');

// connexion
Route::view('inscription','layouts.Inscription');
Route::view('connexion','Account.connexion');
Route::view('Renouvellement','Account.ModifierPassword');
Route::view('Renouveller','Account.ForgetPassword');

// sponsors
Route::view('evenementsponsors','sponsors.evenement-sponsors');
Route::view('evenementsponsorisé','sponsors.evenement-sponsorisé');
Route::view('menusponsors','sponsors.sponsors-account');
Route::view('profileindividu','sponsors.profile-individu');
Route::view('profileentreprise','sponsors.profile-entreprise');
Route::view('perte','sponsors.DeclarationPerte');
Route::view('trouve','sponsors.Déclarer-objet-trouvé');

// investisseurs
Route::view('menusinvestisseurs','investisseurs.investisseurs-account');
Route::view('evenementinvestisseurs','investisseurs.evenement-investisseur');
Route::view('profileindividu','investisseurs.profile-individu');
Route::view('profileentreprise','investisseurs.profile-entreprise');
Route::view('achatagence','investisseurs.acheter-agence');
Route::view('perte','investisseurs.DeclarationPerte');
Route::view('trouve','investisseurs.Déclarer-objet-trouvé');

// sous-traiteurs
Route::view('menutraiteurs','sous-traiteurs.traiteurs-account');
Route::view('profileindividu','sous-traiteurs.profile-individu');
Route::view('profileentreprise','sous-traiteurs.profile-entreprise');
Route::view('perte','sous-traiteurs.DeclarationPerte');
Route::view('trouve','sous-traiteurs.Déclarer-objet-trouvé');
Route::view('evenement-traiteurs','sous-traiteurs.evenement-traiteurs');
Route::view('annonce','sous-traiteurs.annonce');

// jobs
Route::view('menujobs','jobs.jobs-account');
Route::view('profileindividu','jobs.profile-individu');
Route::view('profileentreprise','jobs.profile-entreprise');
Route::view('perte','jobs.DeclarationPerte');
Route::view('trouve','jobs.Déclarer-objet-trouvé');
Route::view('evenement-jobs','jobs.evenement-jobs');
Route::view('annonce','jobs.annonce');