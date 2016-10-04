<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/products', 'ProductsController@showAll');

Route::get('/product/{id}', 'ProductsController@showProduct');

Route::get('/editproduct/{product}', 'ProductsController@edit');

Route::patch('/product/{id}', 'ProductsController@update');

Route::get('/pages', 'PagesController@showAll');

Route::get('/addproduct', 'ProductsController@addForm');

Route::post('/addproduct', 'ProductsController@add');

Route::post('addpage', 'PagesController@add');

Route::get('addpage', 'PagesController@addForm');

Route::get('/editpage/{page}', 'PagesController@edit');

Route::patch('/page/{id}', 'PagesController@update');


Auth::routes();

Route::get('/', 'HomeController@index');
