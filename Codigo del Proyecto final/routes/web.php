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
<<<<<<< HEAD
=======

>>>>>>> c4d76ba052da6259a8351785e07523df689c7a4b
Route::get('/project', 'PagesController@admin');
Route::get('/admin/chat', 'PagesController@chat');
Route::get('/embarcaciones', 'PagesController@show');
Route::get('/project/create', 'PagesController@create');
Route::post('/project', 'PagesController@user');
<<<<<<< HEAD
Route::patch('/chat/{project}','PagesController@message');
/*
Route::get('/project/{project}/edit', 'PagesController@edit');

Route::delete('/project/{project}', 'PagesController@delete');
*/
=======
Route::patch('/chat/{project}', 'PagesController@message');
>>>>>>> c4d76ba052da6259a8351785e07523df689c7a4b

Route::patch('/project/{project}/message', 'PagesController@message');
Route::get('/project/{project}', 'PagesController@fishman');
Route::get('/project/{project}/chat', 'PagesController@FishmanChat');
Route::get('/project/{project}/edit', 'PagesController@edit');
<<<<<<< HEAD
Route::patch('/project/{project}', 'PagesController@update');
=======
Route::patch('/project/{project}', 'PagesController@update');
Route::get('/admin/login', 'AdministratorsController@showLoginForm');
    Route::post('/admin/login', 'AdministratorsController@Login');




    
    Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> c4d76ba052da6259a8351785e07523df689c7a4b
