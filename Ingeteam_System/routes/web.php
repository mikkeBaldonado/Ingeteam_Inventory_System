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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users_record', 'UsersRecordController@getData')->name('users_record');

Route::get('/users_log', 'UsersLogController@index')->name('users_log');

Route::get('/Equipments', 'EquipmentsController@index')->name('Equipments');

Route::get('/Reports', 'ReportsController@index')->name('Reports');
