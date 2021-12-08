<?php

use Illuminate\Support\Facades\Route;

// Admin Routes
Route::group(['namespace'=>'Admin'], function () {
    Route::get("", 'HomeController@index');
});
