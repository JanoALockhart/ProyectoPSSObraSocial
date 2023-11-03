
<?php

use App\Http\Controllers\PlanController;
use App\Http\Controllers\AdminEmpleadoController;
use App\Http\Controllers\AdminClienteController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'checkIfAdmin'])->group(function () {
    Route::get('/adminHome', function () {
        return view('admin.home');
    })->name('adminHome');
    Route::get('/adminProfile',[AdminController::class, 'showProfile'])->name('adminProfile');
    Route::get('/adminEditProfile', [AdminController::class, 'editProfileForm'])
    ->name('adminEditProfile');

    Route::post('/adminUpdateProfile', [AdminController::class, 'updateProfile'])->name('adminUpdateProfile');


    Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
    Route::post('/plans/switch/{plan}', [PlanController::class, 'switch'])->name('plans.switch');
    Route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
    Route::post('/plans', [PlanController::class, 'store'])->name('plans.store');
    Route::get('/plans/edit/{plan}', [PlanController::class, 'edit'])->name('plans.edit');
    Route::put('/plans/{plan}', [PlanController::class, 'update'])->name('plans.update');


    Route::get('/empleados', [AdminEmpleadoController::class, 'index'])->name('admin.adminEmpleado.index');
    Route::get('/empleados/details/{employee}', [AdminEmpleadoController::class, 'details'])->name('admin.adminEmpleado.details');
    Route::get('/empleados/create', [AdminEmpleadoController::class, 'create'])->name('admin.adminEmpleado.create');
    Route::get('/empleados/edit/{employee}', [AdminEmpleadoController::class, 'edit'])->name('admin.adminEmpleado.edit');
    Route::patch('/empleados/update', [AdminEmpleadoController::class, 'update'])->name('admin.adminEmpleado.update');

    Route::get('/admin/clientes', [AdminClienteController::class, 'index'])->name('admin.adminCliente.index');
    Route::get('/admin/clientes/details/{client}', [AdminClienteController::class, 'details'])->name('admin.adminCliente.details');
    Route::get('/admin/clientes/edit/{client}', [AdminClienteController::class, 'edit'])->name('admin.adminCliente.edit');
    Route::patch('/admin/clientes/update', [AdminClienteController::class, 'update'])->name('admin.adminCliente.update');

    Route::get('/admin/solicitudes', function () {
        return view('admin.solicitudes');
    })->name('admin.solicitudes');

    Route::get('admin/solicitudReintegro', function(){
        return view('admin.solicitudReintegro');
    })->name('admin.solicitudReintegro');
    Route::get('admin/solicitudPrestaciones', function(){
        return view('admin.solicitudPrestaciones');
    })->name('admin.solicitudPrestaciones');

    Route::post('/empleados/cambiarEstado/{empleado}', [AdminEmpleadoController::class, 'cambiarEstado'])->name('empleados.cambiarEstado');

});
