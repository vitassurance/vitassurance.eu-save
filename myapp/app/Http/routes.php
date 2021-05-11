<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('compte', function(){
    $user = App\User::find(1);
    $user->password = bcrypt('123');
    $user->save();

});

Route::get('/', 'IndexController@index');


Route::get('mutuelle-sante', 'SanteController@index');

Route::get('obseque', 'ObsequeController@index');

Route::get('moto', 'MotoController@index');

Route::get('moto2', 'MotoController@dex');

Route::get('habitation', 'HabitationController@index');

Route::get('auto', 'AutoController@index');

Route::get('confirmation', 'ConfirmationController@index');

Route::get('Apropos', 'ConfirmationController@apropos');

Route::post('insertionSante', 'SanteController@insertionSante');

Route::post('insertionObseque', 'ObsequeController@insertionObseque');

Route::post('insertionProvisoire', 'ProvisoireController@insertion');

Route::post('insertionHabitation', 'HabitationController@insertionHabitation');

Route::post('insertionAuto', 'AutoController@insertionAuto');

Route::post('insertionMoto', 'MotoController@insertionMoto');

Route::post('insertionMessage', 'ContactController@insertionMessage');

Route::post('recupererVille','VilleController@recupererVille');

Route::get('produit_assurance/{produit}', 'ProvisoireController@provisoire');


Route::get('reclamation','ReclamationController@index');


Route::group(['middleware' => ['auth']], function () {

Route::get('back', 'DashboardController@index'); 

Route::get('lead', 'DashboardController@lead');

Route::get('lead/{produit}', 'ProvisoireController@leads');

Route::get('showLead/{id}', 'ProvisoireController@showLead');

Route::get('message', 'DashboardController@message');

Route::get('back-sante', 'DashboardController@sante');

Route::get('back-obseque', 'DashboardController@obseque');

Route::get('back-habitation', 'DashboardController@habitation');

Route::get('back-auto', 'DashboardController@auto');

Route::get('back-moto', 'DashboardController@moto');

Route::get('exportSante', 'DashboardController@exportSante');

Route::get('exportObseque', 'DashboardController@exportObseque');

Route::get('exportHabitation', 'DashboardController@exportHabitation');

Route::get('exportMoto', 'DashboardController@exportMoto');

Route::get('exportProvisoire/{id}', 'ProvisoireController@exportProvisoire');

Route::get('showSante/{id}', 'DashboardController@showSante');

Route::get('showObseque/{id}', 'DashboardController@showObseque');

Route::get('showHabitation/{id}', 'DashboardController@showHabitation');

Route::get('showMoto/{id}', 'DashboardController@showMoto');

Route::get('showProspect/{id}', 'DashboardController@showProspect');

Route::get('parametrage', 'ParametrageController@index');
Route::post('parametrage', 'ParametrageController@save');



Route::resource('produits', 'ProduitController');

Route::resource('users', 'UserController');

Route::get('status/{id}', 'ProduitController@status');

Route::get('activeUser/{id}', 'UserController@activeUser');

Route::get('statistique', 'StatistiqueController@index');

Route::post('statistique', 'StatistiqueController@search');
});



Route::resource('front-end', 'SanteController');
Route::get('contact', 'ContactController@contact'); 

Route::get('oublier', 'MotController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
