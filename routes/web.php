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
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/details', 'DetailsController@index')->name('details');

Route::post('/login', 'ContactFormController@login');
Route::post('/register', 'ContactFormController@register');

Route::get('/users', function(){
    return view('users');
});//->middleware('auth','auth.admin');

Route::get('/create', function(){
    return view('create');
});


