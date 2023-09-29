<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class AdminEmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Employee::all(); // Obtener todos los planes
        return view('empleado.index');
    }

};
