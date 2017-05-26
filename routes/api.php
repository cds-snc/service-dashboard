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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::resource('departments', 'Api\DepartmentController');

Route::get('departments/{department}/programs', 'Api\DepartmentProgramController@index');
Route::get('departments/{department}/services', 'Api\DepartmentServiceController@index');

Route::resource('programs', 'Api\ProgramController');
Route::get('programs/{program}/services', 'Api\ProgramServiceController@index');

Route::resource('services', 'Api\ServiceController');
