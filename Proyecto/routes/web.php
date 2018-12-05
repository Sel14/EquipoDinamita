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

Route::get('/project', 'PagesController@admin');
Route::get('/admin/chat', 'PagesController@chat');
Route::get('/embarcaciones', 'PagesController@show');
Route::get('/project/create', 'PagesController@create');
Route::post('/project', 'PagesController@user');
Route::patch('/chat/{project}','PagesController@message');

Route::patch('/project/{project}/message', 'PagesController@message');
Route::get('/project/{project}', 'PagesController@fishman');
Route::get('/project/{project}/chat', 'PagesController@FishmanChat');
Route::get('/project/{project}/edit', 'PagesController@edit');
Route::patch('/project/{project}', 'PagesController@update');
Route::get('/admin/login','AdministratorsController@showLoginForm');
	Route::post('/admin/login','AdministratorsController@Login');




	
	Auth::routes();
		Route::get('/home', 'HomeController@index')->name('home');

	

