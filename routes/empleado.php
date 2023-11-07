<?php

use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminEmpleadoController;
use App\Http\Controllers\AdminEmployeeMinorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;
use App\Models\Plan;

Route::get('/empleado_paginaCliente-Empleados', [ClientController::class, 'index'])
    ->name('empleado.paginaCliente-Empleados');


Route::middleware(['auth', 'checkIfEmployee'])->group(function () {
    Route::get('/employeeHome', function () {
        return view('empleado.home');
    })->name('employeeHome');


    Route::get('/employeeProfile',[EmployeeController::class, 'showProfile'])->name('employeeProfile');
    Route::get('/employeeEditProfile', [EmployeeController::class, 'editProfileForm'])
    ->name('employeeEditProfile');

    Route::post('/employeeUpdateProfile', [EmployeeController::class, 'updateProfile'])->name('employeeUpdateProfile');



    Route::get('/empleado_solicitudes', [RequestController::class, 'indexAllClientRequests'])
        ->name('empleado.solicitudes');
    Route::get('/empleado_solicitudReintegro', function(){
        return view('empleado.solicitudReintegro');
    })->name('empleado.solicitudReintegro');
    Route::get('/empleado_solicitudPrestaciones', function(){
        return view('empleado.solicitudPrestaciones');
    })->name('empleado.solicitudPrestaciones');



    Route::post('/empleado/registrar-cliente', [RegisteredUserController::class, 'store'])->name('register');

    Route::get('/empleado/registrar-cliente', function(){
        $planes = Plan::with('prestations')->get(); // Obtener todos los planes
        return view('auth.register', ['planes' => $planes]);
    });


    Route::get('/employeeClientMinors/{id}', [AdminEmployeeMinorController::class, 'listMinors'])->name('empleado.showClientMinors');
    Route::delete('/employeeClientMinors/{id}', [AdminEmployeeMinorController::class, 'softDeleteMinor'])->name('empleado.softDeleteMinor');
    Route::post('/employeeRestoreMinor/{id}', [AdminEmployeeMinorController::class, 'restoreMinor'])->name('empleado.restoreMinor');
    Route::get('/employeeClientMinors/{id}/createMinor', [AdminEmployeeMinorController::class, 'createMinorsEmployee'])->name('empleado.createMinorEmployee');
    Route::post('/employeeRstoreMinor/{id}/storeMinor', [AdminEmployeeMinorController::class, 'storeMinorEmployee'])->name('empleado.storeMinorEmployee');
});

