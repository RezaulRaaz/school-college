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

Auth::routes();
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::get('/','FrontendController@welcome')->name('home');
Route::get('/posts','FrontendController@posts')->name('posts');
Route::get('/post/{title}/{id}','FrontendController@singlePost')->name('single.post');
Route::get('/notices','FrontendController@notices')->name('notices');
Route::get('/notice/{title}/{id}','FrontendController@singleNotices')->name('single.notices');

