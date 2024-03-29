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


Route::get('mc-hook', 'MainController@getMcHook');
Route::post('mc-hook', 'MainController@postMcHook');
Route::get('debugs', 'MainController@getDebugs');
Route::get('debug', 'MainController@getMcDebug');
Route::get('axle', 'MainController@getIP');
Route::get('snd', 'MainController@getSend');