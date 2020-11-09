<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'admin','namespace' => 'Admin','as'=>'admin.','middleware' => ['auth','admin']], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/primary-entry/types','TypeInstitueController@index')->name('primaryEntry.type');
    Route::post('/primary-entry/types/add','TypeInstitueController@store')->name('primaryEntry.type.add');

    Route::get('/primary-entry/college','CollegeInfoController@index')->name('primaryEntry.college');
    Route::post('/primary-entry/college/add','CollegeInfoController@store')->name('primaryEntry.college.add');

    // category routes start-------------

    Route::get('/primary-entry/category','CategoryController@index')->name('primaryEntry.category');
    Route::post('/category/store','CategoryController@store')->name('category.store');
    Route::get('/category/delete/{id}','CategoryController@distory')->name('category.delete');

    // category routes start-------------


    Route::get('/post','PostController@index')->name('post');
    Route::post('/post/store','PostController@store')->name('post.store');
    Route::get('/post/list','PostController@show')->name('post.list');
    Route::get('/post/delete/{id}','PostController@distroy')->name('post.delete');
    Route::get('/post/edit/{id}','PostController@edit')->name('post.edit');
    Route::post('/post/update/{id}','PostController@update')->name('post.update');
});

