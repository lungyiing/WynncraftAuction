<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::get('trades', 'TradeController@getIndex');
Route::get('trade/{$id}' function($user) {
	// Trade stuff
});

Route::get('users', 'UserController@getIndex');
Route::get('user/{user}', function($user) {
	// User
});

Route::get('items', 'ItemController@getIndex');
Route::get('item/{item}', function($item) {
	// Item
});
