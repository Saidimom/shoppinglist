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
Route::get('items', 'ItemsController@index')->name('api.items.index');

//Search items
Route::post('items/search', 'ItemsController@search')->name('api.items.search');

//Create a new item
Route::post('item', 'ItemsController@store')->name('api.items.store');

//Update item
Route::put('item', 'ItemsController@store')->name('api.items.update');

//Destroy item
Route::delete('item/{id}', 'ItemsController@destroy')->name('api.items.destroy');
