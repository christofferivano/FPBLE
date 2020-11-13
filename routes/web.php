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
Route::get('/item/show/{id}', 'ItemController@show')->name('showdetail');

Route::get('/item/index', 'ItemController@index')->name('showitem');
