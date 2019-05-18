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
Route::get('/books/{bookSlug}', 'Controller@showBook')->name('books.view');

Route::get('/contacts', 'Controller@contacts')->name('contacts');

Route::get('/articles', 'Controller@articles')->name('articles');
Route::get('/articles/{slug}', 'Controller@showArticle')->name('articles.view');

Route::get('/interviews', 'Controller@interviews')->name('interviews');

//Route::get('/interviews', 'Controller@interviews')->name('interviews');

Route::get('/reviews', 'ReviewController@list')->name('reviews');

for ($i=1; $i <= 8; $i++) {
	Route::get('/variant'.$i, 'Controller@variant'.$i);
}

//Route::get('/variant1', 'Controller@variant1');
//Route::get('/variant2', 'Controller@variant2');
//Route::get('/variant3', 'Controller@variant3');
//Route::get('/variant4', 'Controller@variant4');
//Route::get('/variant5', 'Controller@reviews')->name('reviews');
//Route::get('/variant6', 'Controller@reviews')->name('reviews');

Route::get('/login', 'Auth\LoginController@showLoginForm' )->name('login');
Route::post('/login', 'Auth\LoginController@login');

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('/password/reset', 'Auth\ForgotPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\ForgotPasswordController@showResetForm')->name('password.reset');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'AdminController@index')->name('admin');

    Route::resource('meetings', 'MeetingController')->except('show');
    Route::resource('articles', 'ArticleController'); // todo except?
    Route::resource('interviews', 'InterviewController')->except('show');
    Route::resource('reviews', 'ReviewController')->except('show');

});

Route::resource('interviews', 'InterviewController')->only('show');

Route::resource('reviews', 'ReviewController')->only('show');

// this one is not needed
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

Route::any('/ckfinder/examples/{example?}', '\CKSource\CKFinderBridge\Controller\CKFinderController@examplesAction')
    ->name('ckfinder_examples');
