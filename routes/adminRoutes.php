<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin','namespace' => 'Admin','as'=>'admin.'], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

});

