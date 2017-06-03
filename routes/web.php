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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

//todo: 'middleware' => 'auth.admin',
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::get('invite/create', 'InviteController@create')->name('invite.create');
    Route::post('invite/process', 'InviteController@process')->name('invite.process');
    Route::resource('users', 'UsersController', ['except' => ['create', 'store']]);
});

Route::get('invite/{token}', 'Auth\InviteController@accept')->name('invite.accept');
Route::post('invite/register', 'Auth\InviteController@register')->name('invite.register');

Route::get('/home', 'HomeController@index')->name('home');


