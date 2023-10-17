<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\AdminEmpleadoController;
use App\Http\Controllers\AdminClienteController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Auth;
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


// Podria moverse esta logica a un controller, pero anda bien.!!
Route::get('/', function () {
    $user = Auth::user();

    $viewName = 'desloguado.home';

    if ($user) {

        $role = $user->getRoleNames()->first();
    
        switch($role)
        {
            case "client": 
                $viewName = "clientHome";
                break;
            case "admin": 
                $viewName = "adminHome";
                break;    
            case "employee": 
                $viewName = "employeeHome";
                break;

            default: break;
        }
        return redirect()->intended($viewName);
    }
  
        return view($viewName);

})->name('deslogueado.home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/pdfMensual', [PDFController::class, 'getPdfMensual']);
Route::get('/pdfAnual', [PDFController::class, 'getPdfAnual']);

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/cliente.php';
require __DIR__.'/empleado.php';
