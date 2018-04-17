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


Route::get('/about', function () {
    return view('about');
});

Route::get('/home', function () {
    return view('index');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/',[
	'uses' => 'RaceController@index',
	'as' => '/',
	]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
