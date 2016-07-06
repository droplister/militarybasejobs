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

    // County - Index
    Route::get('counties', [
        'as'   => 'county::index',
        'uses' => 'Location\CountyController@index',
    ]);

    // County - Show
    Route::get('county/{county}', [
        'as'   => 'county::show',
        'uses' => 'Location\CountyController@show',
    ]);

    // State - Index
    Route::get('states', [
        'as'   => 'state::index',
        'uses' => 'Location\StateController@index',
    ]);

    // State - Show
    Route::get('state/{state}', [
        'as'   => 'state::show',
        'uses' => 'Location\StateController@show',
    ]);
});

/**
  * Department Routes
  */
Route::group(['as' => 'department::'], function() {

    // Index
    Route::get('departments', [
        'as'   => 'index',
        'uses' => 'Department\DepartmentController@index',
    ]);

    // Show
    Route::get('department/{department}', [
        'as'   => 'show',
        'uses' => 'Department\DepartmentController@show',
    ]);

    // Organization - Index
    Route::get('organizations', [
        'as'   => 'organization::index',
        'uses' => 'Department\OrganizationController@index',
    ]);

    // Organization - Show
    Route::get('organization/{organization}', [
        'as'   => 'organization::show',
        'uses' => 'Department\OrganizationController@show',
    ]);
});

/**
  * Facility Routes
  */
Route::group(['as' => 'facility::'], function() {

    // Index
    Route::get('facilities', [
        'as'   => 'index',
        'uses' => 'FacilityController@index',
    ]);

    // Show
    Route::get('facility/{facility}', [
        'as'   => 'show',
        'uses' => 'FacilityController@show',
    ]);
});