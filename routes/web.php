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


Route::get('/', 'ArticleController@index')->name('article_index');

Route::get('contents.post','PostController@index')->name('post_index');
Route::post('contents.post','PostController@create')->name('post_create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
