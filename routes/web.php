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
    return Auth::check()? redirect('/dashboard') : redirect('login');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index');

// End Back End Routes

// Front End Routes

Route::get('/', 'FrontEndController@index');

Route::get('contact', 'FrontEndController@contact');

Route::get('about', 'FrontEndController@about');

Route::group(['prefix'=>'posts-page'], function(){
	Route::get('', 'FrontEndController@allPosts');
	Route::get('detail', 'FrontEndController@singlePost');
});

// End Front End Routes

