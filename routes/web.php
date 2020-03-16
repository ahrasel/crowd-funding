<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

// Site Routes
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@home')->name('site.home');
    Route::get('/about-us', 'SiteController@aboutUs')->name('site.about-us');
    Route::get('/contact', 'SiteController@contact')->name('site.contact');
    Route::post('/contact', 'SiteController@storeContactInfo')->name('site.contactStore');
    Route::get('/profile', 'SiteController@profile')->name('site.profile')->middleware('auth');
    Route::patch('/profile/{user}', 'SiteController@updateProfile')->name('site.profile-update')->middleware('auth');
    Route::patch('/change/{user}', 'SiteController@updatePassword')->name('site.password-update')->middleware('auth');
});


// Member Routs
Route::group(['prefix' => 'member', 'middleware' => 'auth'], function () {
    //dashboard route
    Route::get('/dashboard', 'Member\HomeController@index')->name('member.dashboard');

    //Campaign Routes
    Route::get('create-campaign', 'CampaignController@create')->name('campaigns.create');
    Route::post('create-campaign', 'CampaignController@store')->name('campaigns.store');
    Route::get('all-campings', 'CampaignController@index')->name('campaigns.index');
    Route::get('campings/{campaign}', 'CampaignController@show')->name('campaigns.show');
});

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
