<?php

use Illuminate\Support\Facades\Route;
//AUTH
Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::post('/getCMP', 'App\Http\Controllers\AuthController@getCMP');
Route::post('/loginUsuLocal', 'App\Http\Controllers\AuthController@loginUsuLocal');
Route::post('/loginPersonal', 'App\Http\Controllers\AuthController@loginPersonal');
Route::post('/login-admin', 'App\Http\Controllers\AuthController@loginAdministrador');

//ANEXOS
Route::post('/tipoAnexos', 'App\Http\Controllers\AnexoController@TipoAnexos');
Route::post('/grabarAnexos/GrabarAnexos', 'App\Http\Controllers\AnexoController@GrabarAnexos');
Route::post('/anexos/getAnexosFecha', 'App\Http\Controllers\AnexoController@getAnexosFecha');
Route::post('/anexos/getAnexos', 'App\Http\Controllers\AnexoController@getAnexos');
Route::post('/anexos/deleteAnexos', 'App\Http\Controllers\AnexoController@deleteAnexos');

// REPORTES
Route::post('/reportes/getReporte1', 'App\Http\Controllers\ReportesController@getReporte1');
Route::post('/reportes/getReporte2', 'App\Http\Controllers\ReportesController@getReporte2');
Route::post('/reportes/getReporte3', 'App\Http\Controllers\ReportesController@getReporte3');
Route::post('/reportes/getReporte4', 'App\Http\Controllers\ReportesController@getReporte4');
Route::post('/reportes/getTablasPrimarias', 'App\Http\Controllers\ReportesController@getTablasPrimarias');
Route::post('/reportes/getReporte4Detalle', 'App\Http\Controllers\ReportesController@getReporte4Detalle');

// SISTEMA
Route::post('/sistema/getVersion', 'App\Http\Controllers\AdminController@obtenerVersionSistemaWeb');
Route::get('/sistema/getThemeDesign', 'App\Http\Controllers\AnexoController@getThemeDesign');
Route::post('/sistema/getLogosImpresion', 'App\Http\Controllers\AnexoController@getLogosImpresion');
