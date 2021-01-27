<?php

use Illuminate\Support\Facades\Route;

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
