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

Route::group(['namespace' => 'Admin\User'], function () {
    Route::get('/login', 'LoginController@index');
    Route::post('/login', 'LoginController@login');
    Route::get('/logout', 'LoginController@logout');
});

Route::group(['middleware' => ['check.login']], function () {
    Route::get('/', 'Admin\IndexController@index');

    include('admin.php');
});

Route::get('/wechat', function () {
    return view('wechat.index');
});


