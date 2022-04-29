<?php

use App\Http\Controllers\acesoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inventario\CategoriaController;
use App\Http\Controllers\Inventarios\InventariosController;
use App\Http\Controllers\NotasAudios\NotasAudiosController;
use App\Http\Controllers\Personas\Pacientes\PacientesController;
use App\Http\Controllers\Personas\Usuarios\UsuariosController;
use App\Http\Controllers\Personas\Especialidades\EspecialidadesController;
use App\Http\Controllers\ventas\VentasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CitasMedicas\CitasController;
use App\Http\Controllers\Seguridad\Permisos\PermisosController;
use App\Http\Controllers\Seguridad\Roles\RolesController;
use App\Http\Controllers\ExpedientesMedicos\ExpedientesController;

use App\Http\Controllers\Personas\Proveedores\ProveedoresController;
use App\Http\Controllers\ventas\FacturasController;
use App\Http\Controllers\ventas\DatospacienteController;
use App\Http\Controllers\ventas\FacController;
use App\Http\Controllers\ContactoController;


Route::get('/', function () {
    return view('welcome');
});



// Route::resource("/inventario", CategoriaController::class);

//CitasMedicas
//NotasAudios
Route::resource("/Audios", NotasAudiosController::class);

//ExpedientesMedicos
Route::resource("/contactos", ContactoController::class);
//Inventarios
Route::resource("/inventario", InventariosController::class);
//NotasAudios
Route::resource("/Audios",NotasAudiosController::class);
//Personas
Route:: get('Pacientes', [PacientesController::class, 'index'])->name('Pacienteshh.index');
Route:: post('Pacientes', [PacientesController::class, 'store'])->name('Pacienteshh.store');
Route::resource('Pacientecliente', PacientesController::class);

Route:: get('Usuarios', [UsuariosController::class, 'index'])->name('Usuarioshh.index');
Route:: post('Usuarios', [UsuariosController::class, 'store'])->name('Usuarioshh.store');
Route::resource('Usuariocliente', UsuariosController::class);

Route::resource("/Especialidades", EspecialidadesController::class);
//ReportesEstadisticas

//Ventas
Route::resource("/verventas",  VentasController::class);
//Seguridad

//Empresa
// login
Route::resource("/login", LoginController::class);
Route::resource("/acceso", acesoController::class);

 //CitasMedicas
Route::resource("/citas", CitasController::class);
 //Seguridad
Route::resource("/permisos", PermisosController::class);
Route::resource("/roles", RolesController::class);

Route::resource("/expedientes", ExpedientesController::class);
//Inventarios

//NotasAudios

//Personas
//Proveedores
Route::resource("/proveedores", ProveedoresController::class);
//Contactos Proveedores


Route::resource("/verventas",  VentasController::class);
Route::resource("/facturas",  FacturasController::class);
Route::resource("/facturas",  DatospacienteController::class);
Route::resource("/fac", FacController::class);
