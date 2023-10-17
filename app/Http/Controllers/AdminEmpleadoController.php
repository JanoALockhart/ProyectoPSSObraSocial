<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;

class AdminEmpleadoController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('admin.adminEmpleado.index', compact('employees'));
    }

    public function create()
    {   
        return view('admin.adminEmpleado.create');
    }

    public function details($DNI)
    {   $employee = Employee::where('DNI', $DNI)->first();
        return view('admin.adminEmpleado.details',compact('employee'));
    }

    public function edit($DNI)
    {   $employee = Employee::where('DNI', $DNI)->first();
        return view('admin.adminEmpleado.edit',compact('employee'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'birthDate' => 'required|date',
            'phone' => 'required|string',
            'address' => 'required|string',
            'DNI' => 'required|string',
        ]);

        $employee = Employee::where('DNI', $request->query('DNI'))->firstOrFail();
        
        $employee->user->update([
            'DNI' => $request->input('DNI'),
            'email' => $request->input('email'),
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'birthDate' => $request->input('birthDate'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
        ]);

        $employee->update([
            'DNI' => $request->input('DNI'),
            'registration_date' => $employee->registration_date
        ]);

        return redirect()->route('admin.adminEmpleado.details', ['employee' => $employee->DNI]);
    }

    public function cambiarEstado(Employee $empleado)
    {
        $usuario = $empleado->user;
        $usuario->state = !$usuario->state; // Cambiar de falso a verdadero o de verdadero a falso
        $usuario->save();
        return redirect()->route('admin.adminEmpleado.index')->with('success');
    }

};
