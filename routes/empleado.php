<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ClientController;

Route::get('/empleado_paginaCliente-Empleados', [ClientController::class, 'index'])
    ->name('empleado.paginaCliente-Empleados');


Route::middleware(['auth', 'checkIfEmployee'])->group(function () {
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


    Route::get('/empleado_paginaCliente-Empleados', function(){
        return view('empleado.paginaCliente-Empleados');
    })->name('empleado.paginaCliente-Empleados');

    Route::get('/empleado_solicitudes/cambioEstado/{id}/{newState}', [RequestController::class, 'requestStateChange'])->name('empleado.solicitudes.cambioEstado');

    Route::post('/empleado/registrar-cliente', [RegisteredUserController::class, 'store'])->name('register');

    Route::get('/empleado/registrar-cliente', function(){
        return view('auth.register');
    });


});

