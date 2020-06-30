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

Auth::routes();


Route::get('/details', 'DetailsController@index')->name('details');

//Route::post('/login', 'ContactFormController@login');

Route::get('/users', 'UserController@index')->middleware('auth','auth.admin');


Route::get('/','StanController@index')->name('pocetna');
Route::get('/create','StanController@create');
/* Route::put('/{id}','StanController@update')->name('stan.update');
Route::get('/{id}','StanController@edit')->name('edit'); */
Route::post('/','StanController@store')->name('spremi');
Route::put('/{id}','StanController@update');


Route::post('/{id}','StanController@rezerviraj')->name('rezerviraj');
Route::post('/komentiraj/{id}','StanController@komentiraj')->name('komentiraj');


Route::delete('/{id}','StanController@destroy')->name('izbrisi');
Route::get('/show/{id}','StanController@show')->name('pogledaj');

Route::get('/stan/{id}/edit','StanController@edit');



