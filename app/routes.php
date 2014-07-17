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

Route::get('lorem_ipsum/{par_num}', function($par_num){
	return View::make('lorem_ipsum')
	->with('par_num', $par_num);


});


