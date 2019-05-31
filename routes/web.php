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
    return view('home');
});
// Students page
Route::get('/Students', 'StudentsController@index');
Route::get('/Students/Add', 'StudentsController@add');
Route::post('/Students', 'StudentsController@create');
Route::get('/Students/{id}/Edit', 'StudentsController@edit');
Route::put('/Students/{id}', 'StudentsController@update');
Route::delete('/Students/{id}', 'StudentsController@delete');

Route::get('/Class', 'ClassController@index');
Route::get('/Class/Add', 'ClassController@add');
Route::post('/Class', 'ClassController@create');

Route::get('/Bus', 'BusController@index');
Route::get('/Drivers', 'DriverController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
