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

Route::get('/books', 'BooksController@index')->name('books');
Route::get('/books/new', 'BooksController@new')->name('books.new');
Route::post('/books', 'BooksController@create')->name('books.create');
Route::get('/books/{id}/edit', 'BooksController@edit')->name('books.edit');
Route::post('/books/{id}', 'BooksController@update')->name('books.update');
Route::post('/books/{id}/delete', 'BooksController@destroy')->name('books.destroy');
Route::get('/books/{id}', 'BooksController@show')->name('books.show');

Route::get('/home', 'HomeController@index')->name('home');
