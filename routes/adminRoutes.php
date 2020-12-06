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

    // category routes end-------------


    // post route start------------- --------------------

    Route::get('/post','PostController@index')->name('post');
    Route::post('/post/store','PostController@store')->name('post.store');
    Route::get('/post/list','PostController@show')->name('post.list');
    Route::get('/post/delete/{id}','PostController@distroy')->name('post.delete');
    Route::get('/post/edit/{id}','PostController@edit')->name('post.edit');
    Route::post('/post/update/{id}','PostController@update')->name('post.update');

    // post routes end--------------------


    // users routes start---------------------

    Route::get('/user/add','UserController@index')->name('user.add');
    Route::post('/user/new','UserController@store')->name('new.user');
    Route::get('/user/list','UserController@show')->name('user.list');
    Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
    Route::get('/user/delete/{id}','UserController@distroy')->name('user.delete');

  // users routes end---------------------

  // subjects routes start---------------------

    Route::get('/subject/add','SubjectController@index')->name('subject.add');
    Route::get('/subject/list','SubjectController@list')->name('subject.list');
    Route::post('/subject/store','SubjectController@store')->name('subject.store');


    // marksheet route or resul add--------------------

    Route::get('/mark/index','ResultController@index')->name('mark.result');
    Route::get('/marksheet/{roll}/{exam}/{year}/{class}/{institute}','ResultController@getMarsheet')->name('get.marksheed');
    Route::get('/marks/delete/{id}','ResultController@distroy')->name('mark.result.delete');

    Route::get('/institute/get','ResultController@getdata')->name('institute.get');
    Route::post('/mark/result/add','ResultController@store')->name('mark.add');

});

