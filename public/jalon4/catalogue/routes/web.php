<?php
namespace app\Http\Controllers;
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
    return redirect('index.php/index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// populate the database medias
Route::get('/populate_table_medias', function () {
    return view('populate_table_medias');
});

// page index
Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/explore', function () {
    return view('explore');
})->name('explore');

Route::get('/user', function () {
    return view('user');
})->name('user');

Route::post('/createform', 'PageFilmController@createform')->name('form.create');
Route::post('/updateform', 'PageFilmController@updateform')->name('form.update');
Route::post('film/deleteform', 'PageFilmController@deleteform')->name('form.delete');

// page film
Route::get('film/{imdb_id}', 'PageFilmController@openpage')->name('film');

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

// explore director
Route::get('explore/film_explore_christopher_nolan', 'PageExploreController@christopher_nolan')->name('film_explore_christopher_nolan');
Route::get('explore/film_explore_coppola', 'PageExploreController@coppola')->name('film_explore_coppola');
Route::get('explore/film_explore_steven_spielberg', 'PageExploreController@steven_spielberg')->name('film_explore_steven_spielberg');
Route::get('explore/film_explore_hayao_miyazaki', 'PageExploreController@hayao_miyazaki')->name('film_explore_hayao_miyazaki');


// search
Route::get('searchcontent', 'PageSearchController@searchcontent')->name('searchcontent');
Route::get('searchdefault', 'PageSearchController@searchdefault')->name('searchdefault');
Route::get('/search', function () {
    return view('search');
})->name('search');

// avatar
Route::get('/useravatar', 'UserController@useravatar')->name('useravatar');
Route::post('/useravatar', 'UserController@update_avatar')->name('update_avatar');