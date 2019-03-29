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

Route::get('/', 'postsController@showPosts');

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/add','postsController@insertpost');

Route::get('/post','postsController@show');

Route::get('/delete','postsController@delete');

Route::get('/update/{id}/','postsController@showUpdateView');

Route::post('/update/{id}/','postsController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
