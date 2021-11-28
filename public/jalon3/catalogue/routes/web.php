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

Route::get('/film1', function () {
    return view('film1');
})->name('film1');

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