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
    Route::get('user/edit/profile', 'UserController@edit_profile')->name('user.edit.profile');
    Route::get('user/edit/account', 'UserController@edit_account')->name('user.edit.account');
    Route::get('user/edit/password', 'UserController@edit_password')->name('user.edit.password');
    Route::put('user', 'UserController@update')->name('user.update');
    Route::put('user/edit/contact', 'UserController@contact')->name('user.contact');
    Route::put('user/edit/address', 'UserController@address')->name('user.address');
    Route::post('user/edit/picture', 'UserController@update_avatar')->name('user.avatar');
    Route::put('user/edit/password', 'UserController@update_password')->name('user.password');
});
Route::get('user/{username}', 'UserController@show')->name('user.show');
