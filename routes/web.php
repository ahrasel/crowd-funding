<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@home')->name('site.home');
    Route::get('/about-us', 'SiteController@aboutUs')->name('site.about-us');
    Route::get('/contact', 'SiteController@contact')->name('site.contact');
});

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'HomeController@index')->name('admin.dashboard');
});
