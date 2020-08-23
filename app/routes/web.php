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
Route::post('/complete', 'AppController@complete')->name('complete');


Route::get('/', 'AppController@index')->name('index');
Route::get('/blog', 'AppController@blog')->name('blog');
Route::get('/blogpost', 'AppController@blogpost')->name('blogpost');


/*
Route::get('/contact', function(){
    return view('contact');
});
*/
/*
Route::get('/blog', function(){
    return view('blog/index');
});
*/
