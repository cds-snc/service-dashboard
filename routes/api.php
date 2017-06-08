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

Route::resource('departments', 'Api\DepartmentController', ['only' => [
    'index', 'show'
]]);

Route::get('departments/{department}/programs', 'Api\DepartmentProgramController@index');
Route::get('departments/{department}/services', 'Api\DepartmentServiceController@index');

Route::resource('programs', 'Api\ProgramController', ['only' => [
    'show'
]]);

Route::get('programs/{program}/services', 'Api\ProgramServiceController@index');

Route::resource('services', 'Api\ServiceController', ['only' => [
    'index', 'show'
]]);

Route::get('service_types', 'Api\ServiceTypeController@index');
Route::get('special_designations', 'Api\SpecialDesignationController@index');

Route::get('services/{service}/volumes', 'Api\ServiceVolumeController@index');


Route::get('/charts/departments/service_volume', 'Api\ChartsController@departmentServiceVolume');