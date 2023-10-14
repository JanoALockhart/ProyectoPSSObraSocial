<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'checkIfClient'])->group(function () {
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

});
