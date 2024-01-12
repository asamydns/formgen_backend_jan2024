<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\api_auth;

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


Route::middleware([api_auth::class])->group(function () {
    Route::get('/getArea','App\Http\Controllers\IndexController@getArea');
    Route::post('/applications','App\Http\Controllers\IndexController@apply');
    Route::post('/update','App\Http\Controllers\IndexController@getID');
    Route::post('/upload','App\Http\Controllers\IndexController@upload');
});
