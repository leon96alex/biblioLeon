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

/*
Route::get('books', 
    [
        'as' => 'books',
        'uses' => 'BookController@index'
    ]);
*/
Route::get('books', 'BookController@index')->name('books');

Route::get('authors', 'AuthorController@index')->name('authors');
Route::get('authors/create', 'AuthorController@create')->name('authors.create');
Route::post('authors/store', 'AuthorController@store')->name('authors.store');