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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/discuss', function () {
    return view('discuss');
});

Auth::routes();

Route::get('/forum', [
    'uses' => 'ForumsController@index',
    'as' => 'forum'
]);

Route::get('{provider}/auth', [
    'uses' => 'SocialsController@auth',
    'as' => 'social.auth'
]);

Route::get('/{provider}/redirect', [
    'uses' => 'SocialsController@auth_callback',
    'as' => 'social.callback'
]);

Route::group(['middleware' => 'auth'], function(){
    Route::resource('channels', 'ChannelsController');

    Route::get('discussion/create', [
        'uses' => 'DiscussionsController@create',
        'as' => 'discussion.create'
    ]);

    Route::post('discussion/store', [
        'uses' => 'DiscussionsController@store',
        'as' => 'discussion.store'
    ]);

    Route::Get('discussion/{slug}', [
        'uses' => 'DiscussionsController@show',
        'as' => 'discussion'
    ]);
});