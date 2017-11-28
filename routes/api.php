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

// Route::get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('auth:api')->get('/users', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
    Route::prefix('common')->group(function () {
        Route::get('streets', 'Api\v1\CommonDataController@getStreets');
        Route::get('categories', 'Api\v1\CommonDataController@getCategories');
    });
});

Route::group(['middleware' => 'auth.basic'], function () {

});

