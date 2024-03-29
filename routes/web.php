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
    return view('welcome');
});

Route::get('/movies','MovieController@index');

Route::get('/movies/create', 'MovieController@create');

Route::get('/movies/{id}', 'MovieController@show');

Route::get('/add', 'MovieController@add');


Route::post('/movies', 'MovieController@store');

