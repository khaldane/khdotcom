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

Route::get('/details', [
	'as'     => 'portfolio-details',
	'uses'   => 'PortfolioController@details'
]);

/* Authentication */

Route::get('/login', [
	'as'     => 'login',
	'uses'   => 'UserController@index'
]);

Route::get('/logout', [
	'as'     => 'login',
	'uses'   => 'UserController@logout'
]);


Route::post('/authenticate', [
	'as'     => 'authenticate',
	'uses'   => 'UserController@authenticate'
]);


/* Admin */

Route::get('/admin', [
	'as'     => 'admin-panel',
	'uses'   => 'AdminController@index'
]);

Route::get('/edit-portfolio', [
	'as'     => 'portfolio-edit',
	'uses'   => 'AdminController@portfolioEdit'
]);


Route::get('/delete-portfolio', [
	'as'     => 'portfolio-delete',
	'uses'   => 'AdminController@portfolioDelete'
]);

Route::get('/new-portfolio', [
	'as'     => 'portfolio-create',
	'uses'   => 'AdminController@portfolioCreate'
]);

Route::post('/save-portfolio', [
	'as'     => 'portfolio-save',
	'uses'   => 'AdminController@portfolioSave'
]);

Route::get('/new-tutorial', [
	'as'     => 'tutorial-create',
	'uses'   => 'AdminController@tutorialCreate'
]);

Route::get('/edit-tutorial', [
	'as'     => 'tutorial-edit',
	'uses'   => 'AdminController@tutorialEdit'
]);

Route::get('/delete-tutorial', [
	'as'     => 'tutorial-delete',
	'uses'   => 'AdminController@tutorialDelete'
]);

Route::post('/save-tutorial', [
	'as'     => 'tutorial-save',
	'uses'   => 'AdminController@tutorialSave'
]);
