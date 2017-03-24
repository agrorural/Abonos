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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ventas', 'VentasController@index');
Route::post('/ventas', 'VentasController@store');

Route::get('/reportes', 'ReportesController@index');

Route::get('/reportes/meses', 'ReportesController@indexMeses');
Route::post('/reportes/meses', 'ReportesController@storeMeses');
Route::get('/reportes/meses/{type}', 'ExcelController@exportMeses');

Route::get('/reportes/departamentos', 'ReportesController@indexDepartamentos');
Route::post('/reportes/departamentos', 'ReportesController@storeDepartamentos');
Route::get('/reportes/departamentos/{type}', 'ExcelController@exportDepartamentos');

Route::get('/reportes/segmentos', 'ReportesController@indexSegmentos');
Route::post('/reportes/segmentos', 'ReportesController@storeSegmentos');
Route::get('/reportes/segmentos/{type}', 'ExcelController@exportSegmentos');

Route::get('/reportes/islas', 'ReportesController@indexIslas');
Route::post('/reportes/islas', 'ReportesController@storeIslas');
Route::get('/reportes/islas/{type}', 'ExcelController@exportIslas');
