<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'user'], function(){
    Route::get('/', 'UserController@index')->name('userList');

    Route::get('/{index}', 'UserController@getValue');
});

// Route::get('/welcome', 'PageController@home');
Route::get('/home', 'PageController@home');
Route::get('/about', 'PageController@about');

