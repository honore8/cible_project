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
Route::view('acceuil','Welcome');
Route::view('menuParticipant','layouts.model-participants-account');

