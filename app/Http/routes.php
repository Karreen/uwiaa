<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
Route::get('/', 'HomeController@index');

# main pages
Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('about', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::get('contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);

Route::post('login', ['as' => 'sessions.store', 'uses' => 'SessionsController@store']);
//Route::resource('session', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

Route::group(['prefix' => 'admin'], function()
{
    Route::get('login', ['uses' => 'AdminController@create']); // copy login form from session
    Route::post('login', ['as' => 'admin.store', 'uses' => 'AdminController@store']);
});


# restrict from authenticated users
Route::group(['middleware' => 'guest'], function()
{
    # login
    Route::get('login', ['uses' => 'SessionsController@create']);


    # registration
    Route::get('register', 'RegistrationController@create');
    Route::post('register', ['as' => 'registration.store', 'uses' => 'RegistrationController@store']);
});

# restrict from unauthenticated users
Route::group(['middleware' => 'auth'], function()
{
    # login
    Route::get('logout', [
        'as' => 'sessions.destroy',
        'uses' => 'SessionsController@destroy',
        'middleware' => 'auth'
    ]);
});
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
