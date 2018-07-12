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
Route::auth();
// Route web prefix
Route::get('/','Web\BlogController@index')->name('page');
Route::prefix('web')->group(function(){
	Route::get('publicacion/{id}',													'Web\BlogController@postAll')->name('page.postAll');
	Route::get('publicacion-categoria/{id}',			'Web\BlogController@categoryPublicacion')->name('page.categoryPublicacion');
	Route::get('etiqueta-publicacion/{slug}',	'Web\BlogController@tagPublicacion')->name('page.tagPublicacion');
});


/* Rutas administrador */

Route::resource('tags',						 	'Admin\TagController');
Route::resource('categories',	'Admin\CategoryController');
Route::resource('posts',						'Admin\PostController');


/*Route::get('/', function () {
    return view('welcome');
});*/