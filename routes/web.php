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
    Route::get('/search/name', 'HomeController@searchByName');
    Route::get('/search/id', 'HomeController@searchById');
    Route::get('/lang/{lang}', 'LanguageController@changeLocale');
    Route::get('/contactus', 'HomeController@contactus');
    Route::get('/galleries', 'HomeController@galleries');
    Route::resource('post', 'PostController', ['only' => ['index', 'show']]);
    Route::resource('page', 'PageController', ['only' => ['index', 'show']]);
    Route::resource('user', 'UserController', ['only' => ['index', 'show']]);

});


Route::group(['namespace' => 'Backend', 'prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['auth', 'AdminOnly']], function () {


    Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'dashboard.index']);
    Route::get('/home', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/contactus', ['uses' => 'DashboardController@contactus', 'as' => 'contactus']);
    Route::resource('user', 'UserController');
    Route::resource('page', 'PageController');
    Route::resource('post', 'PostController');
    Route::resource('section', 'SectionController');
    Route::resource('page', 'PageController');
    Route::resource('category', 'CategoryController');
    Route::resource('slider', 'SliderController');
    Route::resource('gallery', 'GalleryController');
    Route::resource('contactus', 'ContactusController', ['except' => 'create', 'store']);
    Route::resource('newsletter', 'NewsLetterController');
    Route::get('newsletter/campaign/create', ['uses' => 'NewsLetterController@getCreateCampaign', 'as' => 'newsletter.campaign.create']);
    Route::post('newsletter/campaign/send', ['uses' => 'NewsLetterController@postCreateCampaign', 'as' => 'newsletter.campaign.send']);
    Route::get('/user/reset/password/{id}', ['uses' => 'UserController@getResetPassword', 'as' => 'user.reset']);
    Route::post('/user/reset/password/{id}', ['uses' => 'UserController@postResetPassword', 'as' => 'user.reset']);

});
