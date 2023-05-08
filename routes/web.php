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


Route::get('/PageAccueil', function () {
    return view('Accueil');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/Inscription', function () {
    return view('Inscription');
});


Route::get('/Contact', function () {
    return view('contact');
});

Route::get('/Produits', function () {
    return view('produits');
});

Route::get('/Calendrier', function () {
    return view('calendrier');
});


Route::resource('commerciaux', 'commerciauxController');


Route :: get ('Inscription', function () {
        return view('Inscription');
});