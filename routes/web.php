<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AdminEmpleadoController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('/plans', [PlanController::class, 'index'])->name('plans.index');
    Route::get('/empleados', [AdminEmpleadoController::class, 'index'])->name('empleados.index');
    Route::get('/empleados/create', [AdminEmpleadoController::class, 'create'])->name('empleados.create');




    Route::get('/client', function () {
        return view('cliente.home');
    })->name('client');
    Route::get('/solicitudReintegro', function(){
        return view('cliente.solicitudReintegro');
    })->name('solicitudReintegro');
    Route::get('/solicitudPrestaciones', function(){
        return view('cliente.solicitudPrestaciones');
    })->name('solicitudPrestaciones');

});

require __DIR__.'/auth.php';
