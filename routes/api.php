<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('articles', 'Api\ArticlesController@index');
Route::get('article/{article}', 'Api\ArticlesController@show');
Route::put('article', 'Api\ArticlesController@update');
Route::post('articles', 'Api\ArticlesController@store');
Route::delete('article/{article}', 'Api\ArticlesController@destroy');
