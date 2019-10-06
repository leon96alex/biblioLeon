<?php

Route::get('/', function () {
    return view('home');
});

//LLIBRES
Route::get('books', 'BookController@index')->name('books');
Route::get('books/create', 'BookController@create')->name('books.create');
Route::post('books/store', 'BookController@store')->name('books.store');
Route::get('books/getBooksByAuthor/{id}', 'BookController@getBooksByAuthor')->name('books.getBooksByAuthor');
Route::get('books/offer', 'BookController@getBooksInOffer')->name('books.offer');

//AUTORS
Route::get('authors', 'AuthorController@index')->name('authors');
Route::get('authors/create', 'AuthorController@create')->name('authors.create');
Route::post('authors/store', 'AuthorController@store')->name('authors.store');

//EDITORIALS
Route::get('editorials', 'EditorialController@index')->name('editorials');
Route::get('editorials/create', 'EditorialController@create')->name('editorials.create');
Route::post('editorials/store', 'EditorialController@store')->name('editorials.store');
Route::get('books/getEditorialsByAuthor/{id}', 'EditorialController@getEditorialsByAuthor')->name('editorials.getEditorialsByAuthor');