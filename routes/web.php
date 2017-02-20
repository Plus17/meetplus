<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('auth/confirmation/{token}', 'Auth\RegisterController@getConfirmation')
        ->name('confirmation');

Route::get('auth/fb', 'Auth\SocialAuthController@redirectToProvider')
        ->name('auth.fb');

Route::get('auth/fb/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/home', 'HomeController@index');

Route::get('/', 'FrontEndController@index');

Route::get('/event/{slug}', 'FrontEndController@showEvent')
        ->name('event.show');
