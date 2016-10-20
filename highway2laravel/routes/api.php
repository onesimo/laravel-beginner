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

/*

Route::group(['middleware' => ['api', 'auth:api']], function(){
	Route::get('dashboard', function(){
		return 'You are authenticated via token';
	});
});
*/
Route::get('/dashboard', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
