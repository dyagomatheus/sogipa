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
Route::get('/alunos', 'HomeController@userList')->name('user.list');
Route::resource('course', 'CourseController');
Route::get('/course/{id}/delete', 'CourseController@delete')->name('course.delete');

Route::resource('student', 'StudentController');
Route::get('/student/{id}/delete', 'StudentController@delete')->name('student.delete');

Route::resource('verse', 'VerseController');
Route::get('/verse/{id}/delete', 'VerseController@delete')->name('verse.delete');

Route::resource('verse', 'VerseController');
Route::get('/verse/{id}/delete', 'VerseController@delete')->name('verse.delete');
Route::get('/verse/{id}/edit', 'VerseController@edit')->name('verse.edit');
Route::put('/verse/{id}/update', 'VerseController@update')->name('verse.update');

Route::get('/certificate/validate/{code}', 'ValidateCertificateController@validateCode')->name('certificate.validate');
Route::get('/solicitacao-certificado', 'ValidateCertificateController@consult')->name('consult.certificate');
Route::post('/consult/certificate', 'ValidateCertificateController@viewCertificate')->name('view.certificate');
