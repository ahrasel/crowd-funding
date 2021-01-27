<?php

use Illuminate\Support\Facades\Route;


// Admin Routes
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
