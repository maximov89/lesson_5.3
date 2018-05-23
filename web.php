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

Route::get('/', 'EntryController@index');

//Route::get('edit/{id}','EntryController@show');
//Route::post('edit/{id}','EntryController@edit');
//
//Route::get('insert','EntryController@insertform');
//Route::post('create','EntryController@insert');
//
//Route::get('delete/{id}','EntryController@delete');
//
Route::get('search','EntryController@searchform');
Route::post('search','EntryController@search');

Route::resource('entries', 'EntryController');