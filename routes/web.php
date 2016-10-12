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

    Route::patch('/product/{id}', [
        'as' => 'editProduct',
        'uses' => 'ProductsController@update'
    ]);

    Route::get('/editproduct/{product}', [
        'as' => 'editProductForm',
        'uses' => 'ProductsController@edit'
    ]);

    Route::get('/deleteproduct/{product}', [
        'as' => 'deleteProductForm',
        'uses' => 'ProductsController@deleteForm'
    ]);

    Route::delete('/product/delete/{id}', [
        'as' => 'productDelete',
        'uses' => 'ProductsController@destroy'
    ]);

    Route::get('/pages', [
        'as' => 'pages',
        'uses' => 'PagesController@showAll'
    ]);

    Route::post('/addpage', [
        'as' => 'addPage',
        'uses' => 'PagesController@add'
    ]);

    Route::get('/addpage', [
        'as' => 'addPageForm',
        'uses' => 'PagesController@addForm'
    ]);

    Route::get('/editpage/{page}', [
        'as' => 'editPageForm',
        'uses' => 'PagesController@edit'
    ]);

    Route::patch('/page/{id}', [
        'as' => 'editPage',
        'uses' => 'PagesController@update'
    ]);

    Route::get('/deletepage/{page}', [
        'as' => 'deletePageForm',
        'uses' => 'PagesController@deleteForm'
    ]);

    Route::delete('/page/delete/{id}', [
        'as' => 'deletePage',
        'uses' => 'PagesController@destroy'
    ]);

    Route::get('/deletepagefile/{id}', [
        'as' => 'deletePageFile',
        'uses' => 'PagesController@deleteFile'
    ]);

    Route::get('/welcome', 'AdminController@index');


    Auth::routes();

});

Route::get('/administrator', 'AdminController@index');

//Route::get('/{alias?}', 'HomeController@products');

Route::get('/{alias?}', 'HomeController@index');

Route::group(['prefix' => 'api'], function () {

    Route::get('/getproducts/{actual}', 'HomeController@ajaxProducts');

});








