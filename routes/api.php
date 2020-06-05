<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::namespace('Api')->group(function () {
    Route::get('/patients','PatientController@index')->name('api-patients');
    Route::get('/patient/{patient}','PatientController@show');
    Route::post('/patient','PatientController@store');
    Route::put('/patient','PatientController@store');
    Route::delete('/patient/{patient}','PatientController@delete');

    Route::get('/scan-reports','ScanReportController@index')->name('api-scan-reports');
    Route::get('/scan-report/{scan}','ScanReportController@show')->name('api-scan-report-show');
    Route::post('/scan-report','ScanReportController@store');
    Route::put('/scan-report','ScanReportController@store');
    Route::delete('/scan-report/{scan}','ScanReportController@delete');

    Route::get('/sonographer-inputs','SonographerInputController@index')->name('api-sonographer-inputs');
    Route::get('/sonographer-input/{input}','SonographerInputController@show');
    Route::post('/sonographer-input','SonographerInputController@store');
    Route::put('/sonographer-input','SonographerInputController@store');
    Route::delete('/sonographer-input/{input}','SonographerInputController@delete');
    
});
