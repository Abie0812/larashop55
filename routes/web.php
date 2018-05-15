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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'e-admin'], function() {
    Route::group(['prefix' => 'product'], function() {
        Route::get('', 'Product\ProductController@index')->name('product-home');
        Route::get('/create', 'Product\ProductController@create')->name('product-create');
        Route::post('/store', 'Product\ProductController@store')->name('product-store');
    });
});

