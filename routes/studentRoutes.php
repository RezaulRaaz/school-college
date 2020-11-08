<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'student','namespace' => 'Students','as'=>'student.'], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');
});

