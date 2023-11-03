<?php

use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EmployeeController;

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
        return view('auth.register');
    });


});

