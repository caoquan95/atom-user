<?php

use Illuminate\Http\Request;

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



Route::prefix("auth")->group(function () {
    Route::post('check/merchant', 'AuthController@checkMerchant');
    Route::post('signup/user', 'AuthController@signup');
    Route::post('signup/merchant', 'AuthController@merchantSignup');

    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('logout', 'AuthController@logout');
    });
});

// load language dictionary
Route::get('language', "Api\LanguageApiController@language");


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return "abc";
// });

