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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admins', \App\Http\Controllers\AdminController::class);
Route::resource('agriculteurs', \App\Http\Controllers\AgriculteurController::class);
Route::resource('agronommes', \App\Http\Controllers\AgronommeController::class);
Route::resource('cultures', \App\Http\Controllers\CultureController::class);
Route::resource('parcelles', \App\Http\Controllers\ParcelleController::class);
Route::resource('personnes', \App\Http\Controllers\PersonneController::class);

//      Routes pour les propositions :

//Route::resource('propositions', \App\Http\Controllers\PropositionController::class);


Route::get('Listes des Propositions', [\App\Http\Controllers\PropositionController::class, 'index'], 'listesPropositions');
Route::get('Ajouter Proposition', [\App\Http\Controllers\PropositionController::class, 'create'], 'ajouterPropositions');
Route::post('Sauvegarder', [\App\Http\Controllers\PropositionController::class, 'store'], 'sauvgarderPropositions');
Route::get('Modifier Proposition', [\App\Http\Controllers\PropositionController::class, 'edit'], 'modifierPropositions');
Route::post('Sauvegarder modification', [\App\Http\Controllers\PropositionController::class, 'update'], 'sauvegarderModification');
Route::post('Supprimer Proposition', [\App\Http\Controllers\PropositionController::class, 'destroy'], 'suppression');
Route::get('Afficher une proposition', [\App\Http\Controllers\PropositionController::class, 'show'], 'afficherPropositions');
