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

Route::get('/info', function () {
    return view('pages.info');
});

Route::get('/pricing', function () {
    return view('pages.pricing');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/entries', 'TournamentController@showCreationForm');

Route::post('/entries', 'TournamentController@createTournament');

Route::get('/tournament/{id}/time', 'TimesController@showTimesForm');

Route::post('/tournament/{id}/time', 'TimesController@createTimes');

Route::get('/tournament/{id}/teams', 'TeamController@showTeamsForm');

Route::post('/tournament/{id}/teams', 'TeamController@createTeams');

Route::get('/tournament/{id}/overview', 'OverviewController@showOverviewForm');

Route::get('/results', 'GameController@showGameForm');

Route::post('/results', 'GameController@createGame');

Route::get('/tournament/{id}/edit', 'TournamentController@showEditForm');

Route::post('/tournament/{id}/edit', 'TournamentController@editTournament');

