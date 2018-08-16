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

Route::get('users/show', ['as' => 'users.show', 'uses' => 'UsersController@show']);

Route::get('users/edit', ['as' => 'users.edit', 'uses' => 'UsersController@edit']);
Route::post('users/edit', ['as' => 'users.update', 'uses' => 'UsersController@update']);

Auth::routes();

Route::resource('posts', 'PostsController');

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'), function () {
    Route::get('/', 'PagesController@home');
    Route::get('/users', 'UsersController@index');
    Route::get('/users/{id?}/edit', 'UsersController@edit');
    Route::post('/users/{id?}/edit', 'UsersController@update');

    Route::get('roles', 'RolesController@index');
    Route::get('roles/create', 'RolesController@create');
    Route::post('roles/create', 'RolesController@store');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/update','ProfileController@edit');
Route::post('auth/update','ProfileController@update')->name('user_update');
Route::get('/products','ProductController@products');
Route::get('/products/details/{id}','ProductController@product_details');
Route::get('cart','CartController@cart');
Route::post('cart','CartController@cart');
Route::get('search','SearchController@search')->name('search');
Route::get('category_products','ProductController@category_product');