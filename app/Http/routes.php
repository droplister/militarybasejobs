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
  * Department Routes
  */
Route::group(['as' => 'department::'], function() {

    // Index
    Route::get('departments', [
        'as'   => 'index',
        'uses' => 'DepartmentController@index',
    ]);

    // Show
    Route::get('department/{department}', [
        'as'   => 'show',
        'uses' => 'DepartmentController@show',
    ]);
});