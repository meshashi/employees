<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('create','EmployeeController@create');
Route::post('insert','EmployeeController@insert');

Route::resource('view','EmployeeController@view');

Route::resource('search','EmployeeController@search');
Route::resource('show','EmployeeController@show');

Route::resource('delete','EmployeeController@delete');


Route::resource('update','EmployeeController@update');
Route::resource('edit/{id}','EmployeeController@edit');