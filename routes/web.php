<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

if (Schema::hasTable('users') && app()->environment() == 'local') {

    Auth::loginUsingId(1);
}

Auth::routes();

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/lang/{lang}', 'LanguageController@changeLocale');
    Route::get('/home', 'HomeController@index');
    Route::get('/contactus', 'HomeController@contactus');
    Route::resource('post', 'PostController',['only' => ['index','show']]);
    Route::resource('page', 'PageController',['only' => ['index','show']]);
    Route::resource('profile', 'UserController',['only' => 'index','show']);

});


Route::group(['namespace' => 'Backend','prefix' => 'backend','middleware' => ['auth']], function () {

    Route::get('/', 'HomeController@index');
    Route::get('/home', 'HomeController@index');
    Route::get('/contactus', 'HomeController@contactus');
    Route::resource('post', 'PostController');
    Route::resource('pages', 'PageController');
    Route::resource('profile', 'UserController');

});
