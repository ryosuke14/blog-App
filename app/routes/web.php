<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'AppController@index')->name('index');
Route::get('/contact', 'AppController@contact')->name('contact');
Route::post('/check', 'AppController@check')->name('check');

Route::get('/', 'AppController@index')->name('index');
Route::get('/blog', 'AppController@blog')->name('blog');

/*
Route::get('/blogpost', function(){
    return view('blog/blogpost');
});
*/
/*
Route::get('/blog', function(){
    return view('blog/index');
});
*/
