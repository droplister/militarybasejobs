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

Route::get('/json', function () {

    $curl = new Curl\Curl();
    $curl->setHeader('Host', 'data.usajobs.gov');
    $curl->setHeader('User-Agent', 'anderson@familymedia.org');
    $curl->setHeader('Authorization-Key', 'ihiSsm6bZyeduqt5xgrrTIaUapFcvuPO5zJzwT4eX6I=');
    $curl->get('https://data.usajobs.gov/api/codelist/geoloccodes');

    $data = json_decode($curl->response);

    return dd($data->CodeList[0]);
});
