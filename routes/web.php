<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function (\App\Importers\InventoryDataImport $import) {

    $results = $import->all();
    dd($results->first());

});
