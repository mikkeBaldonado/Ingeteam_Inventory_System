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

Route::group(array('prefix'=>'administration','middleware' => ['auth', 'admin']), function ()
  {
     
		Route::get('/admin', 'AdminController@index')->name('admin');
		Route::get('/users_record/add', 'Auth\RegisterController@addUser')->name('users_record.add');
		Route::post('/users_record/create', ['uses' => 'Auth\RegisterController@create', 'as' => 'users_record.create']);

		Route::get('/Equipments/add', 'EquipmentsController@addEquipment')->name('Equipments.add');
		Route::post('/Equipments/create', ['uses' => 'EquipmentsController@store', 'as' => 'Equipments.create']);

		Route::get('/Equipments/delete/{id}', ['uses' => 'EquipmentsController@destroy', 'as' => 'Equipments.destroy']);

		Route::get('/users_record/delete/{id}', ['uses' => 'Auth\RegisterController@destroy', 'as' => 'users_record.delete']);

		//Route::delete('/users_record/delete/{id}', 'Auth\RegisterController@destroy');
		Route::get('/Equipments/edit/{id}', ['uses' => 'EquipmentsController@edit', 'as' => 'Equipments.edit']);		
		Route::post('/Equipments/update/{id}', ['uses' => 'EquipmentsController@update', 'as' => 'Equipments.update']);
	

  });

Route::get('/users_record/edit/{id}', ['uses' => 'Auth\RegisterController@edit', 'as' => 'users_record.edit']);		
Route::post('/users_record/update/{id}', ['uses' => 'Auth\RegisterController@update', 'as' => 'users_record.update']);
		
Route::get('/home', 'HomeController@index')->name('home');

Route::post('login/custom', ['uses' => 'Auth\LoginController@login', 'as' => 'login.custom']);

Route::get('/users_record', 'UsersRecordController@getData')->name('users_record');

Route::get('/users_log', 'UsersLogController@index')->name('users_log');

Route::get('/borrowed', 'BorrowsController@index')->name('borrows');

Route::get('/Equipments', 'EquipmentsController@getData')->name('Equipments');

Route::get('/Reports', 'EquipmentsController@reports')->name('Reports');
