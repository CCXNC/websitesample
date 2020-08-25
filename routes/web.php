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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/requirements', 'PagesController@requirements');
Route::get('/branches', 'PagesController@branches');
Route::get('/careers', 'PagesController@careers');
Route::get('/news', 'PagesController@news');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index');
Route::resource('/dashboard/careers', 'CareersController');
Route::resource('/dashboard/branches', 'BranchesController');
Route::resource('/dashboard/news', 'NewsController');
Route::resource('/dashboard/gallery', 'GalleryController');
