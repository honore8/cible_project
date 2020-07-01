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
Route::view('agence','compte-agence');
Route::view('inscriptionOrgani','layouts.InscriptionOrganisateurs');
Route::view('connexion','Account.connexion');
Route::view('Renouvellement','Account.RenouvellementPassword');
Route::view('Renouveller','Account.ForgetPassword');
Route::view('proposdenous','Apropos');
Route::view('fonctionnement','Fonctionnement');
Route::view('tarification','Tarification');
Route::view('signaler','layouts.SignalerEvenement');
Route::view('signalement','layouts.SignalerVideo');
Route::view('Declaration','layouts.DeclarationPerte');
Route::view('Reserver','layouts.ReservationTicket');
Route::view('Sondage','layouts.Sondage');
// Route::view('acceuil','Welcome');
Route::view('menu','layouts.model-organisateurs-account');
Route::view('liste','layouts.listeextras');
Route::view('menusponsors','sponsors.sponsors-account');
Route::view('profile','sponsors.profile');

