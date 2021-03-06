<?php

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
    return view('/home');
});

Route::get('user', function() {
// Réservé aux utilisateurs authentifiés
})->middleware('auth');

Route::resource('user', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('specialite', 'SpecialiteController@create'); 

Route::post('specialite', 'SpecialiteController@store')->name('store.specialite');
    return view('welcome');