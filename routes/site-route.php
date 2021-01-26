<?php

use Illuminate\Support\Facades\Route;

// Site Routes
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@home')->name('site.home');

    Route::get('/how-it-work', 'SiteController@howItWork')->name('site.how-it-work');
    Route::get('/about-us', 'SiteController@aboutUs')->name('site.about-us');

    Route::get('/contact', 'SiteController@contact')->name('site.contact');
    Route::post('/contact', 'SiteController@storeContactInfo')->name('site.contactStore');

    Route::get('/profile', 'SiteController@profile')->name('site.profile')->middleware('auth');
    Route::patch('/profile/{user}', 'SiteController@updateProfile')->name('site.profile-update')->middleware('auth');
    Route::patch('/change/{user}', 'SiteController@updatePassword')->name('site.password-update')->middleware('auth');
});
