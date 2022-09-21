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

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Comics
Route::get('/comics', function () {
    return view('comics.index');
})->name('comics.index');

Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');
    $comic = $comics[$id];
    return view('comics.show', compact('comic'));
})->name('comics.show');

// Characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// Tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// Games
Route::get('/games', function () {
    return view('games');
})->name('games');

// Collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// Videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// Fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// News
Route::get('/news', function () {
    return view('news');
})->name('news');

// Shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');