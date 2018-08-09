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
    return view('home');
});

Route::get('change-language/{language}', 'HomeController@changeLanguage')->name('user.change-language');

Route::group(['middleware' => 'locale'], function () {
    Route::get('change-language/{language}', 'HomeController@changeLanguage')
        ->name('user.change-language');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/update','ProfileController@edit');
Route::post('auth/update','ProfileController@update')->name('user_update');
Route::get('/products','ProductController@products');
Route::get('/products/details/{id}','ProductController@product_details');
Route::get('cart','CartController@cart');
Route::post('cart','CartController@cart');