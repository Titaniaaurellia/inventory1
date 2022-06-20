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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('master')->namespace('App\Http\Controllers')->group(function() {
    Route::prefix('item')->namespace('Master')->group(function() {
        Route::get('/', 'ItemController@index');
        Route::post('/', 'ItemController@store');
        Route::get('/{id}', 'ItemController@show');
        Route::put('/{id}', 'ItemController@update');
        Route::delete('/{id}', 'ItemController@delete');
    });
});
