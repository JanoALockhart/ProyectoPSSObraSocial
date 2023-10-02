<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class AdminEmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Employee::all(); // Obtener todos los planes
        return view('admin.adminEmpleado.index');
    }

    public function create()
    {
        return view('admin.adminEmpleado.create');
    }

    public function details()
    {
        return view('admin.adminEmpleado.details');
    }


};
