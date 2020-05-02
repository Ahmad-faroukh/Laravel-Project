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


Route::get('view/{product}','ProductsController@show');
Route::get('add-product','ProductsController@create');
Route::post('add-product/submit','ProductsController@store');
Route::get('search','ProductsController@index');


Auth::routes();

Route::get('/home', 'PagesController@index')->name('home');
