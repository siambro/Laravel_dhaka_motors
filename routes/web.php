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
    return view('login');
});
Route::get('/admin', function () {
    return view('Admin/index');
});
Route::get('/customer', function () {
    return view('Customer/index');
});
Route::post('/loginManager', 'LoginController@login_manager');
Route::get('/index', 'LoginController@index');