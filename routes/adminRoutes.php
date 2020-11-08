<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'admin','namespace' => 'Admin','as'=>'admin.','middleware' => ['auth','admin']], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/primary-entry/types','TypeInstitueController@index')->name('primaryEntry.type');
    Route::post('/primary-entry/types/add','TypeInstitueController@store')->name('primaryEntry.type.add');

    Route::get('/primary-entry/college','CollegeInfoController@index')->name('primaryEntry.college');
    Route::post('/primary-entry/college/add','CollegeInfoController@store')->name('primaryEntry.college.add');

    Route::get('/post','PostController@index')->name('post');
});

