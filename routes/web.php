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

Route::get('/', 'WelcomeController@show');

Route::get('/products', 'ProductsController@showAll');

Route::get('/product/{id}', 'ProductsController@showProduct');

Route::get('/pages', 'PagesController@test');

Route::get('/addproduct', 'ProductsController@addForm');

Route::post('/addproduct', 'ProductsController@add');

