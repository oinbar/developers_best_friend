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

use Paste\Pre;

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('lorem_ipsum', function(){
	return View::make('lorem_ipsum');
});

Route::get('user_gen', function(){
	return View::make('user_gen');
});
