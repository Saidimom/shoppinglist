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
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::post('user/login', 'Auth\APILoginController@login');

Route::group(['middleware' => 'jwt.auth'], function (){

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

    //Get all ShoppingLists by user_id
    Route::get('lists', 'ShoppingListsController@index')->name('api.lists.index');

    //Create a new ShoppingList
    Route::post('list', 'ShoppingListsController@store')->name('api.lists.store');

    //Update ShoppingList
    Route::put('list', 'ShoppingListsController@store')->name('api.lists.update');

    //Destroy ShoppingList
    Route::delete('list/{id}', 'ShoppingListsController@destroy')->name('api.lists.destroy');

});

