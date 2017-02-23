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

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

Auth::routes();

//Route::any('/testing/pusher', function () {
//    $configName = 'broadcasting.connections.pusher.';
//   $pusher = new Pusher(config($configName.'public'), config($configName.'secret'), config($configName.'app_id'));
//    $pusher->trigger('channelName','eventName',['message' => 'message from the web.php']);
//    return 'done';
//});

Route::get('/logmein', function () {
    Auth::LoginUsingId(1);
    return redirect()->back();
});

Route::get('/loguser', function () {
    Auth::LoginUsingId(4);
    return redirect()->back();
});

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::any('/test', 'HomeController@test');
    Route::get('/search/name', 'HomeController@searchByName');
    Route::get('/search/id', 'HomeController@searchById');
    Route::get('/lang/{lang}', 'LanguageController@changeLocale');
    Route::get('contactus', ['as' => 'contactus','uses' =>'HomeController@getContactus']);
    Route::post('/contactus', 'HomeController@postContactus');
    Route::post('/newsletter', 'HomeController@postNewsletter');
    Route::get('/register/membership', ['as' => 'register.membership','uses' => 'HomeController@getRegisterMembership']);
    Route::post('/register/membership', ['as' => 'register.membership','uses' => 'HomeController@postRegisterMembership']);
    Route::resource('album', 'AlbumController', ['only' => ['index', 'show']]);
    Route::resource('post', 'PostController', ['only' => ['index', 'show']]);
    Route::resource('page', 'PageController', ['only' => ['index', 'show']]);
    Route::resource('user', 'UserController', ['except' => ['destroy','create','store']]);

});


Route::group(['namespace' => 'Backend', 'prefix' => 'backend', 'as' => 'backend.', 'middleware' => ['auth', 'AdminOnly']], function () {

    Route::get('/', ['uses' => 'DashboardController@index', 'as' => 'dashboard.index']);
    Route::get('/home', 'DashboardController@index');
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/contactus', ['uses' => 'DashboardController@contactus', 'as' => 'contactus']);
    Route::get('/publish/trans', ['as' => 'publish.trans','uses' => 'DashboardController@publishTrans']);
    Route::resource('user', 'UserController');
    Route::resource('page', 'PageController');
    Route::resource('post', 'PostController');
    Route::resource('section', 'SectionController');
    Route::resource('page', 'PageController');
    Route::resource('category', 'CategoryController');
    Route::resource('slider', 'SliderController');
    // galleries are the albums related to other models like posts , pages ..
    Route::resource('gallery', 'GalleryController');
    // album is gallery index that does not relate to any post or pages ...
    Route::resource('album', 'AlbumController');
    Route::resource('image', 'ImageController', ['only' => ['destroy', 'update']]);
    Route::resource('contactus', 'ContactusController', ['except' => 'create', 'store']);
    Route::resource('newsletter', 'NewsLetterController');
    Route::get('newsletter/campaign/create', ['uses' => 'NewsLetterController@getCreateCampaign', 'as' => 'newsletter.campaign.create']);
    Route::post('newsletter/campaign/send', ['uses' => 'NewsLetterController@postCreateCampaign', 'as' => 'newsletter.campaign.send']);
    Route::get('/user/reset/password/{id}', ['uses' => 'UserController@getResetPassword', 'as' => 'user.reset']);
    Route::post('/user/reset/password/{id}', ['uses' => 'UserController@postResetPassword', 'as' => 'user.reset']);

});
