<?php
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'institute','namespace' => 'Institutes','as'=>'institute.'], function () {
    Route::get('/dashboard','DashboardController@index')->name('dashboard');

});

