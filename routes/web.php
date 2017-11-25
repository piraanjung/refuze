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

Route::get('/myform', function() {
    return view('myform');
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::post('/api/register', 'Auth\RegisterController@create');




Route::post('/api/set_profile', 'HomeController@set_profile');
Route::get('/api/get_profile', 'HomeController@get_profile');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
