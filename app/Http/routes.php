<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/**
  * Category Routes
  */
Route::group(['as' => 'category::'], function() {

    // Index
    Route::get('job', [
        'as'   => 'index',
        'uses' => 'CategoryController@index',
    ]);

    // Show
    Route::get('job/{category}', [
        'as'   => 'show',
        'uses' => 'CategoryController@show',
    ]);

});

/**
  * Listing Routes
  */
Route::group(['as' => 'listing::'], function() {

    // Index
    Route::get('listings', [
        'as'   => 'index',
        'uses' => 'ListingController@index',
    ]);

    // Show
    Route::get('listing/{listing}', [
        'as'   => 'show',
        'uses' => 'ListingController@show',
    ]);
});

/**
  * Location Routes
  */
Route::group(['as' => 'location::'], function() {

    // Index
    Route::get('map', [
        'as'   => 'index',
        'uses' => 'LocationController@index',
    ]);

    // Show
    Route::get('map/{location}', [
        'as'   => 'show',
        'uses' => 'LocationController@show',
    ]);

});

/**
  * Organization Routes
  */
Route::group(['as' => 'organization::'], function() {

    // Index
    Route::get('gov', [
        'as'   => 'index',
        'uses' => 'OrganizationController@index',
    ]);

    // Show
    Route::get('gov/{organization}', [
        'as'   => 'show',
        'uses' => 'OrganizationController@show',
    ]);
});

/**
  * Static Routes
  */
Route::group(['as' => 'static::'], function() {

    // About
    Route::get('about', [
        'as'   => 'about',
        'uses' => 'StaticController@getAbout',
    ]);

    // Data
    Route::get('data', [
        'as'   => 'data',
        'uses' => 'StaticController@getData',
    ]);

    // Disclaimer
    Route::get('disclaimer', [
        'as'   => 'disclaimer',
        'uses' => 'StaticController@getDisclaimer',
    ]);

    // Privacy
    Route::get('privacy', [
        'as'   => 'privacy',
        'uses' => 'StaticController@getPrivacy',
    ]);

    // Support
    Route::get('support', [
        'as'   => 'support',
        'uses' => 'StaticController@getSupport',
    ]);

    // Terms
    Route::get('terms', [
        'as'   => 'terms',
        'uses' => 'StaticController@getTerms',
    ]);

});

/**
  * Facility Routes
  */
Route::group(['as' => 'facility::'], function() {

    // Index
    Route::get('browse', [
        'as'   => 'index',
        'uses' => 'FacilityController@index',
    ]);

    // Show
    Route::get('{facility}', [
        'as'   => 'show',
        'uses' => 'FacilityController@show',
    ]);

    // Delete
    Route::get('{facility}/delete', [
        'as'   => 'delete',
        'uses' => 'FacilityController@delete',
    ]);
});