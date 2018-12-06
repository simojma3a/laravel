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
Route::get('/', 'HomeController@index');
//Route::get('/service', 'serviceController@index');

Route::get('/sidebar', 'CategorieController@index');
//Route::get('/', 'headController@index');
//Route::get('/services', 'PagesController@services');

Route::resource('/service', 'serviceController');

Route::resource('/profile', 'ProfileController');
Route::get('service.index', 'ServiceController@indexx')->name('service');
Route::get('profile.index', 'ProfileController@index')->name('profile');
Route::get('/profile/{user}', 'ProfileController@show')
->where('user', '\d+')
->name('profile.show');
//Route::resource('posts', 'PostsController');
//Route::resource('/', 'CategorieController');
//Route::resource('/', 'serviceController');


Route::get('/categorie', 'CategorieController@index')->name('categorie.index');
Route::get('/categorie/{categorie}', 'CategorieController@show')
->where('categorie', '\d+')
->name('categorie.show');
Route::group(
    [
        'middleware' => ['auth']
    ],
    function() {

        Route::group(
            [
                'middleware' => ['auth']
            ],
            function() {
            });
        Route::resource('/categorie', 'CategorieController', [
            'except' => ['index', 'show']
        ]);

    }
);


// ceci est equivalent a ce qui est en bas.

//Route::post('/categorie/{id}', 'CategorieController@update');
//Route::get('/categorie/{id}', 'CategorieController@show');
//Route::delete('/categorie/{id}', 'CategorieController@delete');

Auth::routes();

Route::get('/home', 'DashbordController@index')->name('home');
