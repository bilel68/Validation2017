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


Auth::routes();
Route::get('/', 'HomeController@index');
Route::post('/contact/new', 'ContactController@insertOne');
Route::get('/contact/new', 'ContactController@newContactForm');
Route::get('/Jouets', 'JouetController@index');
Route::get('/jouet/{id}', 'JouetController@getOne');
Route::get('/contacts', 'ContactController@index');
Route::get('/reception', 'ReceptionController@index');
Route::get('/java', 'JavaController@index');
Route::get('/logout', 'Auth\LoginController@logout');
