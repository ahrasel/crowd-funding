<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@home')->name('site.home');
    Route::get('/about-us', 'SiteController@aboutUs')->name('site.about-us');
    Route::get('/contact', 'SiteController@contact')->name('site.contact');
    Route::post('/contact', 'SiteController@storeContactInfo')->name('site.contactStore');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    //dashboard route
    Route::get('/dashboard', 'Admin\HomeController@index')->name('admin.dashboard');

    // campaign categories routes
    Route::resource('campaign-categories', 'Admin\CampaignCategoryController');

    // campaign routes
    // Route::resource('campaigns', 'CampaignController');

    // Contact Queries Routes
    Route::resource('contact-queries', 'Admin\ContactQueryController');
});
