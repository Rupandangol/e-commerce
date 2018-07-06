<?php

Route::get('/', 'FrontController@index')->name('home');
Route::get('/shirts', 'FrontController@shirts')->name('shirts');
Route::get('/shirt', 'FrontController@shirt')->name('shirt');


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');


    Route::resource('product', 'ProductsController');
    Route::resource('category', 'CategoriesController');
});