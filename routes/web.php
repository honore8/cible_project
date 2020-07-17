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
Auth::routes();

Route::get('/','AcceuilController@create');
// Route::get('/agences', [ 'uses' => 'AgenceController@index']);

Route::post('/nouscontacter',['as'=>'contact',
    'uses'=>'ContactController@send']);
    Route::post('/addcomment',['as'=>'commenter',
    'uses'=>'CommentaireController@store'])->middleware('auth');
//Route::get('nouscontacter', 'ContactController@create');

Route::view('agence','compte-agence');
Route::view('inscription','layouts.Inscription');
Route::get('/connexion',['as'=>'connexion',
'uses'=>'AcceuilController@connexion']);
Route::view('Renouvellement','Account.ModifierPassword');
Route::view('Renouveller','Account.ForgetPassword');
Route::view('proposdenous','Apropos');
Route::view('fonctionnement','Fonctionnement');
Route::view('tarification','Tarification');
Route::view('signaler','layouts.SignalerEvenement');
Route::view('signalement','layouts.SignalerVideo');
Route::view('Declaration','layouts.DeclarationPerte');
Route::view('Reserver','layouts.ReservationTicket');
Route::view('Sondage','layouts.Sondage');
Route::view('menu','layouts.model-organisateurs-account');
Route::view('liste','layouts.listeextras');
Route::view('menusponsors','sponsors.sponsors-account');
Route::view('menutraiteurs','sous-traiteurs.traiteurs-account');
Route::view('menusjobs','extras.extras-account');
Route::view('menusinvestisseurs','investisseurs.investisseurs-account');
Route::view('menusparticipants','participants.participants-account');
Route::view('perteparticipants','participants.DeclarationPerte');
Route::view('reservationparticipants','evenement.reservation');
Route::view('payer','evenement.payement');
Route::view('reservationparticipant','participants.reservation');
Route::view('traiteurtrouve','sous-traiteurs.Déclarer-objet-trouvé');
Route::view('extratrouve','extras.Déclarer-objet-trouvé');
Route::view('profile1','sponsors.profile');
Route::view('profile2','sous-traiteurs.profile');
Route::view('profile3','extras.profile');
Route::view('profile4','investisseurs.profile');
Route::view('profile5','participants.profile');





