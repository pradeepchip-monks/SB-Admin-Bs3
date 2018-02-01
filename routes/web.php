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
    //return view('dashboard');	
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/charts', function () {
    return View::make('charts');
});

Route::get('/tables', function () {
    return View::make('tables');
});

Route::get('/forms', function () {
    return View::make('forms');
});

Route::get('/bootstrap-elements', function () {
    return View::make('bootstrap-elements');
});

Route::get('/bootstrap-grid', function () {
    return View('bootstrap-grid');
});

Route::get('/blank-page', function () {
    return View('blank-page');
});

Route::get('/index-rtl', function () {
    return View('index-rtl');
});