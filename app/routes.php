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
	return View::make('hello');
});

Route::get('index', function()
{
 return View::make('index');
});

Route::get('form', function()
{
 return View::make('forms');
});

Route::get('login', 'UserController@login');
Route::post('authenticate', 'UserController@authenticate');
Route::get('logout', 'UserController@logout');
Route::get('register', 'UserController@register'); 
Route::post('store', 'UserController@store');

//sentry

// Route::get('dashboard', function()
// {
//  return View::make('index');
// });

// Route::get('/', array('before' => 'members_auth', 'uses' => 'LoginController@dashboard'));

// Route::get('loginsentry', 'LoginController@showLogin');

// Route::post('/login', 'LoginController@storeLogin');

// Route::get('registersentry', 'LoginController@register');

// Route::get('/logout', 'LoginController@getLogout');

// Route::post('/register', 'LoginController@storeRegister');

// Route::get('/register/{userId}/activate/{activationCode}', 'LoginController@registerActivate');

// Route::get('/forgotpassword', 'LoginController@showForgotpassword');

// Route::post('/forgotpassword', 'LoginController@storeForgotpassword');

// Route::get('/newpassword', 'LoginController@showNewPassword');

// Route::post('/newpassword', 'LoginController@storeNewPassword');

// Route::get('/social/{provider}/{action?}', array("as" => "loginWith", "uses" => "LoginController@loginWithSocial"));
// //