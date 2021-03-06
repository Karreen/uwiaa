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

# main pages
Route::get('/', 'HomeController@index');
Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('about', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::get('contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);
Route::get('blog', ['as' => 'blog', 'uses' => 'HomeController@blog']);

Route::resource('posts', 'PostsController');

Route::get('forum', 'PostsController@index');

Route::get('posts/{post_id}/comments/', 'CommentController@index');
Route::post('posts/{post_id}/comments/', 'CommentController@store');

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

# restrict from authenticated users
Route::group(['middleware' => 'guest'], function()
{
    # login
    Route::get('login', ['uses' => 'SessionsController@create']);

    # registration
    Route::get('register', 'RegistrationController@create');
    Route::post('register', ['as' => 'registration.store', 'uses' => 'RegistrationController@store']);
});

# profile
//Route::resource('profiles', 'ProfilesController', ['only' => ['show', 'edit', 'update']]);
Route::group(['prefix' => 'profiles'], function()
{
    Route::get('/{username}', ['uses' => 'ProfilesController@show', 'as' => 'profile.show']);
    Route::get('/{username}/edit', ['uses' => 'ProfilesController@edit', 'as' => 'profile.edit']);
    Route::put('/{username}', ['uses' => 'ProfilesController@update', 'as' => 'profile.update']);
});


Route::resource('messages/{username}', 'MessagesController', []); # Handles pm

Route::get('/test', function()
{
    dd(Role::whereName('member')->get()->first()->name);
//    $requst = \Illuminate\Http\Request::create('/', 'GET', ['first_name' => 'Shane', 'last_name' =>, ])
//    $bus->dispatch(); # dispatch commands this easily :D
});

# login
Route::post('login', ['as' => 'sessions.store', 'uses' => 'SessionsController@store']);

Route::group(['prefix' => 'admin'], function()
{
    Route::get('login', ['uses' => 'AdminController@create']); // copy login form from session
    Route::post('login', ['as' => 'admin.store', 'uses' => 'AdminController@store']);
});





//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);

# php artisan make:event UserWasSignedIn
# php artisan handler:event UpdateUserLogin --event="UserWasSigned"