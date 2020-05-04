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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/iniciar-avaliacao', 'HomeController@initAvaliation')->name('initAvaliation');
Route::post('/enviar-avaliacao', 'HomeController@store')->name('essay.store');
Route::get('/visualizar-avaliacao/{id}', 'HomeController@show')->name('essay.show');
