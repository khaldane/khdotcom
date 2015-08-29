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
	return View::make('pages.index');
});

/* 
 * Navbar
 */
Route::get('/portfolio', [
	'as'     => 'portfolio',
	'uses'   => 'PortfolioController@index'
]);

Route::get('/gaming', [
	'as'     => 'gaming',
	'uses'   => 'GamingController@index'
]);


Route::get('/tutorials', [
	'as'     => 'tutorials',
	'uses'   => 'TutorialController@index'
]);


Route::get('/contact', [
	'as'     => 'contact',
	'uses'   => 'ContactController@index'
]);
