<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\listeCRUDController;

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
    return view('template');
});

// Exo2_01
// Route::get('/{prenom}/{nom}', function ($prenom, $nom) {
//     echo "Bonjour " . $prenom . " " . $nom . ". ";
// });

// Exo2_02
Route::get('/{title}', function ($title) {
    return 'Title: ' . $title;
})->where('title', '[A-Za-z]');

// Exo2_03
Route::get('listeFilms', function () { 
    return "Liste des films"; 
})->name('listeFilms');

// Exo2_04
Route::get('/route_demo01', function () {
    return view('route_demo01');
});

// Indice3
Route::get('listeMedias', 'App\Http\Controllers\listeMediasController@getListeMedias');

// Indice4
// Route::get('listeMedias/{type}/{annee}', 'App\Http\controllers\listeMediasController@afficherListeMedias');

// liste_create
Route::get('listeMedias/update', 'App\Http\Controllers\listeCRUDController@liste_create');

// liste_read
Route::get('listeMedias/read/{line}', 'App\Http\Controllers\listeCRUDController@liste_read');

// liste_delete
Route::get('listeMedias/delete/{line}', 'App\Http\Controllers\listeCRUDController@liste_delete');

// liste_update
Route::get('listeMedias/update/{line}', 'App\Http\Controllers\listeCRUDController@liste_update');