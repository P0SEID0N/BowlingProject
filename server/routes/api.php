<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('new-game', 'gamesController@storeNewGame');

Route::get('game-history', 'gamesController@getGames');

//Route::get('game', 'gamesController@getGameById');

