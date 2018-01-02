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

Route::get('/', function () {
    return view('home');
});

Route::get('/devops', function () {
    return view('devops');
});

Route::get('/web_dev', function () {
    return view('web_dev');
});
Route::get('/network', function () {
    return view('network');
});
Route::get('/tableau', function () {
    return view('tableau');
});
Route::get('/mulsoft', function () {
    return view('mulsoft');
});
Route::get('/crypto', function () {
    return view('crypto');
});
Route::post('/newRegistration','UserController@newRegistration');