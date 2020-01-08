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
use App\People;
Route::get('/people/{people}','PeopleController@show');
Route::put('/people/{people}','PeopleController@update');
Route::delete('/people/{people}','PeopleController@destroy');
Route::apiResource('/people','PeopleController');