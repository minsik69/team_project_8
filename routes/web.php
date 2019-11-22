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
    return view('main');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/join', function() {
    return view('join');
});

Route::get('/member', function() {
    return view('member');
});

Route::get('/japan', function() {
    return view('japan');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');