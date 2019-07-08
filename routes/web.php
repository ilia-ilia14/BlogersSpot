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

// set up page routes and call them from the controller
Route::get('/', "PagesController@index");
Route::get('/categories', "PagesController@categories");
Route::get('/signin', "PagesController@signin");
Route::get('/signup', "PagesController@signup");


// set up post routes that are defined in the PostController
Route::resource('posts', 'PostsController');
Route::get('posts/{id}/{name}', 'PostsController@getPostsByCategoryId');

// set up authenticate routes that are defined in the dashBoardController
Auth::routes();
Route::get('/dashboard', 'DashBoardController@index');
