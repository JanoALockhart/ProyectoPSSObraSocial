<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClientMinors18Controller;
use App\Http\Controllers\RequestController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'checkIfClient'])->group(function () {
    Route::get('/clientHome', function () {
        return view('cliente.home');
    })->name('clientHome');
    Route::get('/solicitudesCliente', [RequestController::class, 'indexClientRequests'])->name('solicitudesCliente');
    Route::get('/solicitudCliente/{id}',[RequestController::class, 'show'])->name('solicitud')->whereNumber('id');
    Route::get('/nuevaSolicitud', [RequestController::class, 'create'])->name('nuevaSolicitud');
    Route::post('/solicitudes', [RequestController::class, 'store'])->name('solicitudes.store');
    Route::get('/menores', [ClientMinors18Controller::class, 'showMinors'])->name('menores');
    Route::get('/clientProfile', function () {
        return view('cliente.perfil');
    })->name('clientProfile');
    Route::get('/modifyClientProfile', function () {
        return view('cliente.modificarPerfil');
    })->name('modifyClientProfile');

    Route::get('/cupon', function () {
        return view('cliente.cupon');
    })->name('cupon');
});
