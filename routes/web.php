<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/','App\Http\Controllers\CommitteeController@index');
Route::post('/getUserID','App\Http\Controllers\CommitteeController@getUserID');
Route::post('/getUserName','App\Http\Controllers\CommitteeController@getUserName');
Route::get('/profile/{id}','App\Http\Controllers\CommitteeController@profile')->name('profile');
Route::get('/profile2/{id}','App\Http\Controllers\CommitteeController@profile2');
Route::post('/login','App\Http\Controllers\CommitteeController@login');
Route::get('/login', function(){
    session(['NAME' => ""]);
    session(['PASSWORD' => ""]);
    return view('login');
});

Route::post('/score','App\Http\Controllers\CommitteeController@score');
Route::post('/comment','App\Http\Controllers\CommitteeController@comment');

Route::get('/files/{id}', 'App\Http\Controllers\CommitteeController@getFile');
Route::get('/links/{id}', 'App\Http\Controllers\CommitteeController@getLink');

Route::get('/paginate', 'App\Http\Controllers\CommitteeController@paginate');

Route::post('/update', 'App\Http\Controllers\CommitteeController@getID');

Route::get('/next/{id}', 'App\Http\Controllers\CommitteeController@next');
Route::get('/previous/{id}', 'App\Http\Controllers\CommitteeController@previous');
Route::post('/duplicate', 'App\Http\Controllers\CommitteeController@duplicate');
Route::get('/duplicates', 'App\Http\Controllers\CommitteeController@viewDuplicates');
Route::get('/master', 'App\Http\Controllers\CommitteeController@allApplications')->name('master');
Route::get('/scored', 'App\Http\Controllers\CommitteeController@scoredApplications');
Route::get('/unscored', 'App\Http\Controllers\CommitteeController@unscoredApplications');
Route::get('/assigned', 'App\Http\Controllers\CommitteeController@assignedApplications');