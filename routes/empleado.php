<?php

use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
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
});
