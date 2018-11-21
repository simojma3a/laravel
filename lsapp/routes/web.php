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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'serviceController@index');
Route::get('/service', 'serviceController@index');

Route::get('/sidebar', 'CategorieController@index');
//Route::get('/', 'headController@index');
//Route::get('/services', 'PagesController@services');


//Route::resource('posts', 'PostsController');
//Route::resource('/', 'CategorieController');
//Route::resource('/', 'serviceController');