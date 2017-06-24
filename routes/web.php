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

	Route::group(['prefix'=>'users'], function(){
		Route::get('status-user={trashed?}',['as'=>'users.index','uses'=>'UserController@index','middleware' => ['permission:user-list']]);
		Route::get('create',['as'=>'users.create','uses'=>'UserController@create','middleware' => ['permission:user-create']]);
		Route::post('create',['as'=>'users.store','uses'=>'UserController@store','middleware' => ['permission:user-create']]);
		Route::get('{id}/edit',['as'=>'users.edit','uses'=>'UserController@edit','middleware' => ['permission:user-edit']]);
		Route::patch('{id}',['as'=>'users.update','uses'=>'UserController@update','middleware' => ['permission:user-edit']]);
		Route::get('{id}/delete-{act?}',['as'=>'users.destroy','uses'=>'UserController@destroy','middleware' => ['permission:user-delete']]);
		Route::get('{id}/restore',['as'=>'users.restore','uses'=>'UserController@restore']);
		Route::get('?action={act?}',['as'=>'users.bulk','uses'=>'UserController@destroy','middleware' => ['permission:user-list|user-create|user-edit|cate-delete']]);
	});

	Route::group(['prefix'=>'roles'], function(){
		Route::get('status-role={trashed?}',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);
		Route::get('create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);
		Route::post('create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);
		Route::get('{id}',['as'=>'roles.show','uses'=>'RoleController@show']);
		Route::get('{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);
		Route::post('{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);
		Route::get('{id}/delete-{act?}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
		Route::get('{id}/restore',['as'=>'roles.restore','uses'=>'RoleController@restore']);
		Route::delete('?action={act?}',['as'=>'roles.bulk','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);
	});

	Route::group(['prefix'=>'permissions'], function(){
		Route::get('status-permi={trashed?}',['as'=>'permissions.index','uses'=>'PermissionController@index','middleware' => ['permission:permi-list|permi-create|permi-edit|permi-delete']]);
		Route::get('create',['as'=>'permissions.create','uses'=>'PermissionController@create','middleware' => ['permission:permi-create']]);
		Route::post('create',['as'=>'permissions.store','uses'=>'PermissionController@store','middleware' => ['permission:permi-create']]);
		Route::get('{id}',['as'=>'permissions.show','uses'=>'PermissionController@show']);
		Route::get('{id}/edit',['as'=>'permissions.edit','uses'=>'PermissionController@edit','middleware' => ['permission:permi-edit']]);
		Route::post('{id}',['as'=>'permissions.update','uses'=>'PermissionController@update','middleware' => ['permission:permi-edit']]);
		Route::get('{id}/delete-{act?}',['as'=>'permissions.destroy','uses'=>'PermissionController@destroy','middleware' => ['permission:permi-delete']]);
		Route::get('{id}/restore',['as'=>'permissions.restore','uses'=>'PermissionController@restore']);
		Route::get('?action={act?}',['as'=>'permissions.bulk','uses'=>'PermissionController@destroy','middleware' => ['permission:permi-list|permi-create|permi-edit|permi-delete']]);
	});

	Route::group(['prefix'=>'posts'], function(){
		Route::get('status-post={trashed?}',['as'=>'posts.index','uses'=>'PostController@index','middleware' => ['permission:post-list|post-create|post-edit|post-delete']]);
		Route::get('new',['as'=>'posts.create','uses'=>'PostController@create','middleware' => ['permission:post-create']]);
		Route::post('new',['as'=>'posts.store','uses'=>'PostController@store','middleware' => ['permission:post-create']]);
		Route::get('{id}/edit',['as'=>'posts.edit','uses'=>'PostController@edit','middleware' => ['permission:post-edit']]);
		Route::patch('{id}',['as'=>'posts.update','uses'=>'PostController@update','middleware' => ['permission:post-edit']]);
		Route::get('{id}/delete-{act?}',['as'=>'posts.destroy','uses'=>'PostController@destroy','middleware' => ['permission:post-delete']]);
		Route::get('{id}/restore',['as'=>'posts.restore','uses'=>'PostController@restore']);
		Route::get('?action={act?}',['as'=>'posts.bulk','uses'=>'PostController@destroy','middleware' => ['permission:post-list|post-create|post-edit|post-delete']]);
	});

	Route::group(['prefix'=>'categories'], function(){
		Route::get('status-cate={trashed?}',['as'=>'categories.index','uses'=>'CategoryController@index','middleware' => ['permission:cate-list']]);
		Route::get('create',['as'=>'categories.create','uses'=>'CategoryController@create','middleware' => ['permission:cate-create']]);
		Route::post('create',['as'=>'categories.store','uses'=>'CategoryController@store','middleware' => ['permission:cate-create']]);
		Route::get('{id}/edit',['as'=>'categories.edit','uses'=>'CategoryController@edit','middleware' => ['permission:cate-edit']]);
		Route::patch('{id}',['as'=>'categories.update','uses'=>'CategoryController@update','middleware' => ['permission:cate-edit']]);
		Route::get('{id}/delete-{act?}',['as'=>'categories.destroy','uses'=>'CategoryController@destroy','middleware' => ['permission:cate-delete']]);
		Route::get('{id}/restore',['as'=>'categories.restore','uses'=>'CategoryController@restore']);
		Route::get('?action={act?}',['as'=>'categories.bulk','uses'=>'CategoryController@destroy','middleware' => ['permission:cate-list|cate-create|cate-edit|cate-delete']]);
	});

	Route::group(['prefix'=>'tags'], function(){
		Route::get('status-tag={trashed?}',['as'=>'tags.index','uses'=>'TagController@index','middleware' => ['permission:tag-list']]);
		Route::get('new',['as'=>'tags.create','uses'=>'TagController@create','middleware' => ['permission:tag-create']]);
		Route::post('new',['as'=>'tags.store','uses'=>'TagController@store','middleware' => ['permission:tag-create']]);
		Route::get('{id}/edit',['as'=>'tags.edit','uses'=>'TagController@edit','middleware' => ['permission:tag-edit']]);
		Route::patch('{id}',['as'=>'tags.update','uses'=>'TagController@update','middleware' => ['permission:tag-edit']]);
		Route::get('{id}/delete={act}',['as'=>'tags.destroy','uses'=>'TagController@destroy','middleware' => ['permission:tag-delete']]);
        Route::post('/delete/{id?}/action={act?}',['as'=>'tags.bulk','uses'=>'TagController@destroy']);
        Route::get('{id}/restore',['as'=>'tags.restore','uses'=>'TagController@restore']);
        Route::post('{id}/restore/action={act?}',['as'=>'tags.bulk.restore','uses'=>'TagController@restore']);
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

