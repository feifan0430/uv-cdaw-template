<?php
namespace app\Http\Controllers;

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\PageFilmController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::post('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/signin', function () {
    return view('login');
})->name('signin');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::get('/createdatabase', function () {
    return view('createDatabase');
})->name('createdatabase');

Route::post('/createform', 'PageFilmController@createform')->name('form.create');
Route::post('/updateform', 'PageFilmController@updateform')->name('form.update');
Route::post('film/deleteform', 'PageFilmController@deleteform')->name('form.delete');

// Route::get('/film/{imdb_id}', function ($imdb_id) {
//     return view('film', ['imdb_id' => $imdb_id]);
// })->name('film');

Route::get('film/{imdb_id}', 'PageFilmController@openpage')->name('film');

Route::get('film/filmlike/{imdb_id}', 'PageFilmController@updatelike')->name('film.like');
Route::get('film/filmwatch/{imdb_id}', 'PageFilmController@updatewatch')->name('film.watch');

// explore
Route::get('explore/film_explore_effacer', 'PageExploreController@effacer')->name('film_explore_effacer');
Route::get('explore/film_explore_afficher', 'PageExploreController@afficher')->name('film_explore_afficher');

// explore country
Route::get('explore/film_explore_france', 'PageExploreController@france')->name('film_explore_france');
Route::get('explore/film_explore_usa', 'PageExploreController@usa')->name('film_explore_usa');
Route::get('explore/film_explore_uk', 'PageExploreController@uk')->name('film_explore_uk');
Route::get('explore/film_explore_germany', 'PageExploreController@germany')->name('film_explore_germany');
Route::get('explore/film_explore_italy', 'PageExploreController@italy')->name('film_explore_italy');
Route::get('explore/film_explore_japan', 'PageExploreController@japan')->name('film_explore_japan');
Route::get('explore/film_explore_spain', 'PageExploreController@spain')->name('film_explore_spain');

// explore year
Route::get('explore/film_explore_year_after2010', 'PageExploreController@after2010')->name('film_explore_year_after2010');
Route::get('explore/film_explore_between2000and2009', 'PageExploreController@between2000and2009')->name('film_explore_year_between2000and2009');
Route::get('explore/film_explore_between1980and1999', 'PageExploreController@between1980and1999')->name('film_explore_year_between1980and1999');
Route::get('explore/film_explore_before1980', 'PageExploreController@before1980')->name('film_explore_year_before1980');