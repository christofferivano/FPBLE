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

Route::get('/item/new', 'ItemController@create')->name('newitem');
Route::post('/item/create', 'ItemController@store')->name('createitem');
Route::get('/item/show/{id}', 'ItemController@show')->name('showitemdetail');
Route::get('/item/index', 'ItemController@index')->name('showitem');
Route::get('/item/edit/{id}', 'itemController@update')->name('item.edit');
Route::put('/item/edit/{id}', 'itemController@edit')->name('item.editput');
Route::get('/item/delete/{id}', 'ItemController@destroy')->name('item.deletepage');
Route::delete('/item/delete/{id}', 'ItemController@delete')->name('item.delete');

Route::get('/category/new', 'CategoryController@create')->name('newcategory');
Route::post('/category/create', 'CategoryController@store')->name('createcategory');
Route::get('/category/show/{id}', 'CategoryController@show')->name('showcategorydetail');
Route::get('/category/index', 'CategoryController@index')->name('showcategory');
Route::get('/category/edit/{id}', 'CategoryController@update')->name('category.edit');
Route::put('/category/edit/{id}', 'CategoryController@edit')->name('category.editput');
Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.deletepage');
Route::delete('/category/delete/{id}', 'CategoryController@delete')->name('category.delete');
