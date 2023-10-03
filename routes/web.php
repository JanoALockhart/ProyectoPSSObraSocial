<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AdminEmpleadoController;
use App\Http\Controllers\AdminClienteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('desloguado.home');
})->name('deslogueado.home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
    Route::get('/empleados', [AdminEmpleadoController::class, 'index'])->name('admin.adminEmpleado.index');
    Route::get('/empleados/details', [AdminEmpleadoController::class, 'details'])->name('admin.adminEmpleado.details');
    Route::get('/empleados/create', [AdminEmpleadoController::class, 'create'])->name('admin.adminEmpleado.create');
    Route::get('/empleados/edit', [AdminEmpleadoController::class, 'edit'])->name('admin.adminEmpleado.edit');

    Route::get('/admin/clientes', [AdminClienteController::class, 'index'])->name('admin.adminCliente.index');
    Route::get('/admin/clientes/details', [AdminClienteController::class, 'details'])->name('admin.adminCliente.details');
    Route::get('/admin/clientes/edit', [AdminClienteController::class, 'edit'])->name('admin.adminCliente.edit');

    Route::get('/clientHome', function () {
        return view('cliente.home');
    })->name('clientHome');
    Route::get('/solicitudesCliente', function () {
        return view('cliente.solicitudes');
    })->name('solicitudesCliente');
    Route::get('/solicitudReintegro', function(){
        return view('cliente.solicitudReintegro');
    })->name('solicitudReintegro');
    Route::get('/solicitudPrestaciones', function(){
        return view('cliente.solicitudPrestaciones');
    })->name('solicitudPrestaciones');
    Route::get('/cupon', function () {
        return view('cliente.cupon');
    })->name('cupon');
    Route::get('/nuevaSolicitud', function () {
        return view('cliente.nuevaSolicitud');
    })->name('nuevaSolicitud');
    Route::get('/clientProfile', function () {
        return view('cliente.perfil');
    })->name('clientProfile');
    Route::get('/modifyClientProfile', function () {
        return view('cliente.modificarPerfil');
    })->name('modifyClientProfile');

    Route::get('/adminHome', function () {
        return view('admin.home');
    })->name('adminHome');

    Route::get('/employeeHome', function () {
        return view('empleado.home');
    })->name('employeeHome');

    Route::get('/employeeProfile', function () {
        return view('empleado.perfil');
    })->name('employeeProfile');


    Route::get('/empleado_solicitudes', function () {
        return view('empleado.solicitudes');
    })->name('empleado.solicitudes');
    Route::get('/empleado_solicitudReintegro', function(){
        return view('empleado.solicitudReintegro');
    })->name('empleado.solicitudReintegro');
    Route::get('/empleado_solicitudPrestaciones', function(){
        return view('empleado.solicitudPrestaciones');
    })->name('empleado.solicitudPrestaciones');
});




require __DIR__.'/auth.php';
