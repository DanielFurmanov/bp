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

Route::get('/', 'Controller@main')->name('home');
Route::get('/books', 'Controller@books')->name('books');

Route::get('/contacts', 'Controller@contacts')->name('contacts');
Route::get('/articles', 'Controller@articles')->name('articles');
Route::get('/interviews', 'Controller@interviews')->name('interviews');
Route::get('/reviews', 'Controller@reviews')->name('reviews');


