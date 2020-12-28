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



// 中間テーブル作成の仕方
// Route::get('/',function() {
//     $tag_id = [
//         1,
//         2,
//         3,
//     ];
//     $article = \App\Models\Article::find(1);
//     $article->tags()->sync($tag_id);
// });

Route::get('contents.post','PostController@index')->name('post_index');
Route::post('contents.post','PostController@create')->name('post_create');
