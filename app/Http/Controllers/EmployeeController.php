<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function showProfile()
    {
        $employee = DB::table('employees')
            ->join('users', 'employees.DNI', '=', 'users.DNI')
            ->select('employees.DNI', 'users.firstName', 'users.lastName', 'users.birthDate', 'users.email', 'users.address', 'users.phone')
            ->where('users.DNI', auth()->user()->DNI)
            ->first();
        
        return view('empleado.perfil', compact('employee'));
    }

    public function editProfileForm()
    {
        $employee = DB::table('employees')
            ->join('users', 'employees.DNI', '=', 'users.DNI')
            ->select('employees.DNI', 'users.firstName', 'users.lastName', 'users.email', 'users.address', 'users.phone')
            ->where('users.DNI', auth()->user()->DNI)
            ->first();
        
        return view('empleado.editarperfil', compact('employee'));
    }

    public function updateProfile(Request $request)
    {
        $employeeDNI = auth()->user()->DNI;

        // Realiza la validación de los datos del formulario aquí

        // Actualiza los datos del empleado en la base de datos
        DB::table('users')
            ->where('DNI', $employeeDNI)
            ->update([
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
            ]);

        return redirect()->route('employeeProfile')->with('success', 'Perfil actualizado correctamente');
    }
}
