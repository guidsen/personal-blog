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

Route::get('/', ['as' => 'feed', 'uses' => 'BlogController@index']);

Route::get('dashboard/login', 'Dashboard\AuthController@login');
Route::post('dashboard/login', 'Dashboard\AuthController@postLogin');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth', 'namespace' => 'Dashboard'], function () {
    Route::get('/logout', 'AuthController@logout');
    Route::get('/', ['as' => 'dashboard.index', 'uses' => 'PostsController@index']);
    Route::resource('post', 'PostsController');
});

Route::get('{slug}', ['as' => 'post.show', 'uses' => 'BlogController@show']);