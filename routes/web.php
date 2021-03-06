<?php

use App\Evenement;
use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware' => 'web'], function () {

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/','AcceuilController@create');
// Route::get('/agences', [ 'uses' => 'AgenceController@index']);

Route::view('signaler','layouts.SignalerEvenement');
Route::view('signalement','layouts.SignalerVideo');
Route::view('Declaration','layouts.DeclarationPerte');
Route::view('Reserver','layouts.ReservationTicket');
Route::view('Sondage','layouts.Sondage');




Route::post('/nouscontacter',['as'=>'contact','uses'=>'ContactController@send']);
    Route::post('/addcomment',['as'=>'commenter',
    'uses'=>'CommentaireController@store'])->middleware('auth');
Route::get('/connexion',['as'=>'connexion',
'uses'=>'AcceuilController@connexion']);//->middleware('guest');
// agence evenementielle
Route::view('agence','agence.compte-agence');
Route::view('info','agence.info');
Route::view('payer','evenement.payement');

// Acceuil
Route::view('proposdenous','Apropos');
Route::view('fonctionnement','Fonctionnement');
Route::view('tarification','Tarification');
Route::view('commentaire','commentaire');

// connexion
Route::view('inscription','layouts.Inscription');
Route::view('Renouvellement','Account.ModifierPassword');
Route::view('Renouveller','Account.ForgetPassword');

// participants
Route::view('menusparticipants','participants.participants-account');
Route::view('perteparticipants','participants.DeclarationPerte');
Route::view('reservationparticipants','evenement.reservation');
Route::view('reservationparticipant','participants.reservation');
Route::view('profile-participants','participants.profile-participants');

// sponsors
Route::view('evenementsponsors','sponsors.evenement-sponsors');
Route::view('evenementsponsorisé','sponsors.evenement-sponsorisé');
Route::view('menusponsors','sponsors.sponsors-account');
Route::view('profile-sponsors','sponsors.profile-sponsors');
Route::view('demande-sponsors','sponsors.demande-sponsors');
// Route::view('sponsors-perte','sponsors.DeclarationPerte');
// Route::view('sponsors-trouve','sponsors.Déclarer-objet-trouvé');

// investisseurs
Route::view('menusinvestisseurs','investisseurs.investisseurs-account');
Route::view('profile-investisseurs','investisseurs.profile-investisseurs');
Route::view('evenementinvestisseurs','investisseurs.evenement-investisseur');
Route::view('demande-investissement','investisseurs.demande-investissement');
// Route::view('investisseurs-profileindividu','investisseurs.profile-individu');
// Route::view('investisseurs-profileentreprise','investisseurs.profile-entreprise');
Route::view('achatagence','investisseurs.acheter-agence');
// Route::view('investisseurs-perte','investisseurs.DeclarationPerte');
// Route::view('investisseurs-trouve','investisseurs.Déclarer-objet-trouvé');

// sous-traiteurs
Route::view('menutraiteurs','sous-traiteurs.traiteurs-account');
// Route::view('traitant-profileindividu','sous-traiteurs.profile-individu');
Route::view('profile-traiteurs','sous-traiteurs.profile-traiteurs');
// Route::view('traitant-perte','sous-traiteurs.DeclarationPerte');
// Route::view('traitant-trouve','sous-traiteurs.Déclarer-objet-trouvé');
Route::view('evenement-traiteurs','sous-traiteurs.evenement-traiteurs');
Route::view('traitant-annonce','sous-traiteurs.annonce');
Route::view('demande-traiteurs','sous-traiteurs.demande-traiteurs');


// jobs
Route::view('menujobs','jobs.jobs-account');
Route::view('profile-jobs','jobs.profile-jobs');
Route::view('demande-extra','jobs.demande-extra');
// Route::view('jobs-perte','jobs.DeclarationPerte');
// Route::view('jobs-trouve','jobs.Déclarer-objet-trouvé');
Route::view('evenement-jobs','jobs.evenement-jobs');
Route::view('jobs-annonce','jobs.annonce');

// organisateurs
Route::view('menu','organisateurs.model-organisateurs-account');
Route::view('profile-organisateurs','organisateurs.profile-organisateurs');
Route::view('liste','organisateurs.liste');
Route::view('sponsoring','organisateurs.sponsoring');
Route::view('organisateurs-annonce','organisateurs.annonces');
Route::view('evenement-organisateurs','organisateurs.evenement-organisateurs');
Route::view('prix-organisateur','organisateurs.liste-paiement');
Route::view('agence-vente','organisateurs.vendre-agence');
// Route::view('page-evenement','organisateurs.page-evenement');
Route::get('/creer-evenement', 'AcceuilController@evenement')->name('creer-evenement');
Route::get('/page-evenement', 'AcceuilController@page')->name('page-evenement');

// organisateurs

Route::group(['prefix' => 'organisateur',  'middleware' => ['role:organisateur']], function()
{
    Route::view('menu','organisateurs.model-organisateurs-account')->name('menu');
    Route::view('organisateurs-individu','organisateurs.profile-individu');
    Route::view('organisateurs-entreprise','organisateurs.profile-entreprise');
    Route::view('liste','organisateurs.liste');
    Route::view('sponsoring','organisateurs.sponsoring');
    Route::view('organisateurs-annonce','organisateurs.annonces');
    Route::view('evenement-organisateur','organisateurs.evenement-organisateur');
    Route::view('prix-organisateur','organisateurs.liste-paiement');

});

Route::get('/creer-evenement', 'AcceuilController@evenement')->name('creer-evenement');
Auth::routes();
Route::group(['prefix' => 'profil',  'middleware' => 'auth'], function()
{
    Route::get('home', 'ProfilController@index')->name('home');
    Route::post('enregistrer', 'ProfilController@store')->name('store');
    Route::get('enregistrer/entreprise','ProfilController@storeEntrepise')->name('saveEntreprise');
    Route::get('enregistrer/personne','ProfilController@storePersonne')->name('savePersonne');
Route::get('user','ProfilController@Rdirect')->name('saveOrganisateur');
    });
});

Route::get('organisateur', 'RoleController@organisateur')->name('organisateur');
Route::get('sponsor', 'RoleController@sponsor')->name('sponsor');
Route::get('prestataire', 'RoleController@jober')->name('jober');
Route::get('jober', 'RoleController@prestataire')->name('prestataire');
Route::get('participant', 'RoleController@participant')->name('participant');
Route::get('investisseur', 'RoleController@investisseur')->name('investisseur');

Route::get('role', 'ProfilController@assignrole')->name('role');
Route::get('/creer-evenement', 'AcceuilController@evenement')->name('creer-evenement');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
