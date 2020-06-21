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
Route::get('/', function () {
    return view('welcome');
})->name('home');
Auth::routes();


Route::get('/details', 'DetailsController@index')->name('details');

//Route::post('/login', 'ContactFormController@login');
//Route::post('/register', 'ContactFormController@register');

Route::get('/users', function(){
    return view('users');
});//->middleware('auth','auth.admin');


Route::get('/','StanController@index');
Route::get('/create','StanController@create');
Route::post('/','StanController@store')->name('spremi');
Route::put('/{id}','StanController@update');
Route::delete('/{id}','StanController@destroy')->name('izbrisi');
Route::get('/show/{id}','StanController@show')->name('pogledaj');

Route::get('/stan/{id}/edit','StanController@edit');



