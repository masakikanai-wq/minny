<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get('users_menyu','UserController@index')->name('user_index');
Route::group(['middleware' => 'auth'], function() {
    Route::get('/{id}/contents.comment', 'CommentController@index')->name('comment_index');
    Route::post('/{id}/contents.comment', 'CommentController@create')->name('comment_create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{id}','ArticleController@create_like')->name('create_like');
Route::get('/{id}', 'ArticleController@show')->name('article_show');
Route::delete('/{id}/contents.comment', 'CommentController@destroy')->name('comment_destroy');
