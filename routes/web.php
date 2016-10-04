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

Route::get('/administrator/products', 'ProductsController@showAll');

Route::get('/administrator/product/{id}', 'ProductsController@showProduct');

Route::get('/administrator/editproduct/{product}', 'ProductsController@edit');

Route::patch('/administrator/product/{id}', 'ProductsController@update');

Route::get('/administrator/pages', 'PagesController@showAll');

Route::get('/administrator/addproduct', 'ProductsController@addForm');

Route::post('/administrator/addproduct', 'ProductsController@add');

Route::post('/administrator/addpage', 'PagesController@add');

Route::get('/administrator/addpage', 'PagesController@addForm');

Route::get('/administrator/editpage/{page}', 'PagesController@edit');

Route::patch('/administrator/page/{id}', 'PagesController@update');


Auth::routes();

Route::get('/administrator', 'HomeController@index');

Route::get('/', 'HomeController@index');

Route::get('/administrator/welcome', 'HomeController@index');

Route::get('/administrator/deleteproduct/{product}', 'ProductsController@deleteForm');

Route::delete('administrator/product/delete/{id}', 'ProductsController@destroy');

Route::get('administrator/deletepage/{page}', 'PagesController@deleteForm');

Route::delete('/administrator/page/delete/{id}', 'PagesController@destroy');
