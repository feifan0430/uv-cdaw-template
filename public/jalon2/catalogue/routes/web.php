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

// Exo2_01
Route::get('/{prenom}/{nom}', function ($prenom, $nom) {
    echo "Bonjour " . $prenom . " " . $nom . ". ";
});

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