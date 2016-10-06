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

Route::group(['prefix' => 'administrator'], function () {

    Route::get('/products', [
        'as' => 'products',
        'uses' => 'ProductsController@showAll']);

    Route::get('/addproduct', [
        'as' => 'addProduct',
        'uses' => 'ProductsController@addForm'
    ]);

    Route::post('/addproduct', [
        'as' => 'addProductPost',
        'uses' => 'ProductsController@add'
    ]);

    Route::get('/product/{id}', 'ProductsController@showProduct');

    Route::patch('/product/{id}', 'ProductsController@update');

    Route::get('/editproduct/{product}', 'ProductsController@edit');

    Route::get('/deleteproduct/{product}', [
        'as' => 'deleteProductForm',
        'uses' => 'ProductsController@deleteForm'
    ]);

    Route::delete('/product/delete/{id}', 'ProductsController@destroy');

    Route::get('/pages', [
        'as' => 'pages',
        'uses' => 'PagesController@showAll'
    ]);

    Route::post('/addpage', 'PagesController@add');

    Route::get('/addpage', 'PagesController@addForm');

    Route::get('/editpage/{page}', [
        'as' => 'editpage',
        'uses' => 'PagesController@edit'
    ]);

    Route::patch('/page/{id}', 'PagesController@update');

    Route::get('/deletepage/{page}', [
        'as' => 'deletePageForm',
        'uses' => 'PagesController@deleteForm'
    ]);

    Route::delete('/page/delete/{id}', 'PagesController@destroy');

    Route::get('/', 'HomeController@indexAdmin');

    Auth::routes();

});

Route::get('/', 'HomeController@index');

Route::get('/o-nas', 'HomeController@about');

Route::get('/kontakt', 'HomeController@contact');
