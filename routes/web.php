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
Route::get('/stockMotorcycle', function () {
    return view('Admin/stockMotorcycle');
});
Route::get('/stockParts', function () {
    return view('Admin/stockParts');
});
Route::get('/discount', function () {
    return view('Admin/discount');
});

Route::get('/customer', function () {
    return view('Customer/index');
});
Route::post('/loginManager', 'LoginController@login_manager');
Route::get('/index', 'LoginController@index');

Route::get('/stockMotorcycle', 'AdminController@stockMotorcycle');
Route::post('/stock_m', 'AdminController@stock_m');
Route::get('/stockMotorcycle', 'AdminController@view_stockMotorcycle');

Route::get('/stockParts', 'AdminController@stockParts');
Route::post('/stock_p', 'AdminController@stock_p');
Route::get('/stockParts', 'AdminController@view_stockParts');


Route::post('/stockParts', 'AdminController@stockParts');