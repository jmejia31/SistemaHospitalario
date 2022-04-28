<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inventario\CategoriaController;
use App\Http\Controllers\CitasMedicas\CitasController;
use App\Http\Controllers\ReportesEstadisticas\ReportesController;
Route::get('/', function () {
    return view('welcome');
});



Route::resource("/categorias", CategoriaController::class);

//CitasMedicas
Route::resource("/citas", CitasController::class);
//Compras

//ExpedientesMedicos

//Inventarios

//NotasAudios

//Personas

//ReportesEstadisticas
//Route::resource("/reportes", ReportesController::class);
Route::get('/reportes', "App\Http\Controllers\ReportesEstadisticas\Reportes\ReportesController@index");

Route::post('/reportes_store', "App\Http\Controllers\ReportesEstadisticas\Reportes\ReportesController@store")->name('reportes.store');

//Ruta que sirve para visualizar el reporte de citas en el navegador en formato pdf
Route::get('/VerPdf_cita', "App\Http\Controllers\ReportesEstadisticas\Reportes\ReportesController@VerPdf_cita")->name('VerPdf.Citas');
Route::get('/VerPdf_pacientes', "App\Http\Controllers\ReportesEstadisticas\Reportes\ReportesController@VerPdf_pacientes")->name('VerPdf.Pacientes');

Route::get('/Descargar', "App\Http\Controllers\ReportesEstadisticas\Reportes\ReportesController@Descargar")->name('Descargar');
//Ventas

//Seguridad

//Empresa