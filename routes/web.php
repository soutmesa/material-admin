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

Route::group(['middleware' => ['auth']], function() {

	Route::get('/home', 'HomeController@index');

	Route::get('/dashboard', 'HomeController@index');

	Route::group(['prefix' => 'users'], function(){
		Route::get('/', 'UserController@index');
	});

	Route::group(['prefix'=>'roles'], function(){
		Route::get('',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
		Route::get('create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
		Route::post('create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
		Route::get('{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
		Route::get('{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
		Route::patch('{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
		Route::delete('{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
	});

	Route::group(['prefix'=>'posts'], function(){
		Route::get('',['as'=>'posts.index','uses'=>'PostController@index','middleware' => ['permission:post-list|post-create|post-edit|post-delete']]);
		Route::get('create',['as'=>'posts.create','uses'=>'PostController@create','middleware' => ['permission:post-create']]);
		Route::post('create',['as'=>'posts.store','uses'=>'PostController@store','middleware' => ['permission:post-create']]);
		Route::get('{id}',['as'=>'posts.show','uses'=>'PostController@show']);
		Route::get('{id}/edit',['as'=>'posts.edit','uses'=>'PostController@edit','middleware' => ['permission:post-edit']]);
		Route::patch('{id}',['as'=>'posts.update','uses'=>'PostController@update','middleware' => ['permission:post-edit']]);
		Route::delete('{id}',['as'=>'posts.destroy','uses'=>'PostController@destroy','middleware' => ['permission:post-delete']]);
	});
});

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

