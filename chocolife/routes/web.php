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


Route::get('/', 'PentHouseController@show');
Route::get('/home/{id_sales}', 'PentHouseController@showItem');
Route::get('/show/sort', ['uses' => 'PentHouseController@sort', 'as' => 'sort']);
Route::post('/feedback', 'PentHouseController@addFeedbacks');
Route::post('/showfeedback', 'PentHouseController@showFeedbacks');
Route::get('/adminpanel/admin', 'AdminController@login');
Route::get('/admin/index', 'AdminController@index');
Route::get('/admin/logout', 'AdminController@logout');
Route::get('/admin/index', 'AdminController@categories');
Route::post('/admin/store', 'AdminController@store');
Route::post('admin/addPicture', 'AdminController@addPicture');
Route::match(['get','post'],'/admin','AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/register', 'PentHouseController@index');