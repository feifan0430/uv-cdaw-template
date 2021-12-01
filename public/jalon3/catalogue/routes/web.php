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