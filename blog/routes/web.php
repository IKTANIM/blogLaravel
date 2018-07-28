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

Route::get('/signIn','BlogController@signIn')->name('signin');
Route::post('/signIn','BlogController@signInPost');
Route::get('/signUp','BlogController@signUp')->name('signup');
Route::get('/logout','BlogController@signOut')->name('logout');
Route::get('/dashboard','BlogController@dashboard')->name('dashboard');
Route::get('/home','BlogController@home')->name('home');
Route::get('/postDetails/{id}','BlogController@postDetails')->name('postDetails');
Route::post('/postDetails/{id}','BlogController@postDetailsPost');
Route::get('/signOut','BlogController@signOut')->name('signOut');
Route::get('/post/create','BlogController@postCreate')->name('postCreate');
Route::post('/post/create','BlogController@postCreateStore');

