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

Route::middleware('auth')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResources(['user' => 'App\Http\Controllers\API\UserController']);

 Route::get('profile','App\Http\Controllers\API\UserController@profile');
 Route::get('getProfile','App\Http\Controllers\API\UserController@getProfile');
 Route::put('profile','App\Http\Controllers\API\UserController@updateprofile');
 Route::get('getAllUsers','App\Http\Controllers\API\UserController@getAllUsers');
 Route::post('updateRole','App\Http\Controllers\API\UserController@updateRole');





