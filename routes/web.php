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
// Route::get('/cekUser', 'HomeController@index')->name('cekUser');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('properti', 'propertiController');

Route::get('/DashboardPemilik', 'DashboardController@index');
Route::get('/DashboardAdmin', 'DashboardController@admin');
Route::resource('PropertiAdmin', 'AdminController');