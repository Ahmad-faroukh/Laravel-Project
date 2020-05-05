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


Route::get('/','PagesController@index');
Route::get('cart','PagesController@cart');
Route::get('checkout','PagesController@checkout');
Route::get('contact','PagesController@contact');


Route::get('product/view/{product}','ProductsController@show');
Route::get('product/add','ProductsController@create')->name('add-product');
Route::post('product/submit','ProductsController@store')->name('product-submit');
Route::get('product/search','ProductsController@search')->name('search');
Route::get('product/browse','ProductsController@index')->name('browse');


Auth::routes();

Route::get('/home', 'PagesController@index')->name('home');
