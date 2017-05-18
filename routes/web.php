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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('user', 'UserController');
Route::group(['middleware' => 'auth'], function () {
    Route::get('user/edit', 'UserController@edit')->name('user.edit');
    Route::put('user', 'UserController@update')->name('user.update');
    Route::put('user/edit/contact', 'UserController@contact')->name('user.contact');
    Route::put('user/edit/address', 'UserController@address')->name('user.address');
});
Route::get('user/{username}', 'UserController@show')->name('user.show');
