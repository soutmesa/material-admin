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

// Back End Routes
Route::get('/admin', function () {
    return Auth::check()? redirect('/home') : redirect('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// End Back End Routes

// Front End Routes
Route::get('/', function(){

});

// End Front End Routes
