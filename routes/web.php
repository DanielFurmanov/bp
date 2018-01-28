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


Route::get('/contacts', function() {
    return '/contacts';
})->name('contacts');

Route::get('/articles', function() {
    return '/articles';
})->name('articles');

Route::get('/books', function() {
    return '/books';
})->name('books');

Route::get('/interviews', function() {
    return '/interviews';
})->name('interviews');

Route::get('/reviews', function() {
    return '/reviews';
})->name('reviews');

