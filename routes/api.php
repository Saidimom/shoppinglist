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


//List of items
Route::get('items', 'ItemsController@index');

//Create a new item
Route::post('item', 'ItemsController@store');

//Update item
Route::put('item', 'ItemsController@store');

//Destroy item
Route::delete('item', 'ItemsController@destroy');
