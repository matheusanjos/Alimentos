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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tipos', 'TipoController@index');
Route::get('/novo/tipo', 'TipoController@create');
Route::post('/tipos', 'TipoController@store');
Route::get('/editar/tipo/{id}', 'TipoController@edit');
Route::post('/editar/tipo/{id}', 'TipoController@update');
Route::get('/apagar/tipo/{id}', 'TipoController@destroy');
Route::get('/restaurar/tipo', 'TipoController@indexWithTrashed');
Route::get('/restaurar/tipo/{id}', 'TipoController@restore');

Route::get('/alimentos', 'AlimentoController@index');
Route::get('/novo/alimento', 'AlimentoController@create');
Route::post('/alimentos', 'AlimentoController@store');
Route::get('/editar/alimento/{id}', 'AlimentoController@edit');
Route::post('/editar/alimento/{id}', 'AlimentoController@update');

