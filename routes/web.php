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
    return view('pages.welcome');
});

Route::get('/eingaben', function () {
    return view('pages.eingaben');
});

Route::get('/mannschaften', function () {
    return view('pages.mannschaften');
});

Route::get('/zeit', function () {
    return view('pages.zeit');
});

Route::get('/registrierung', function () {
    return view('pages.registrierung');
});
