
<?php

use App\Http\Controllers\AdminClienteController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/adminHome', function () {
        return view('admin.home');
    })->name('adminHome');

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

    Route::get('/admin/solicitudes', function () {
        return view('admin.solicitudes');
    })->name('admin.solicitudes');

    Route::get('admin/solicitudReintegro', function(){
        return view('admin.solicitudReintegro');
    })->name('admin.solicitudReintegro');
    Route::get('admin/solicitudPrestaciones', function(){
        return view('admin.solicitudPrestaciones');
    })->name('admin.solicitudPrestaciones');



});