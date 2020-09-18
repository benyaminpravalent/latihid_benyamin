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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create', 'ApiController@create');

Route::get('/show', 'ApiController@show');

Route::get('/show/{id}', 'ApiController@showById');

Route::put('/update/{id}', 'ApiController@updateById');

Route::delete('delete/{id}', 'ApiController@deleteById');