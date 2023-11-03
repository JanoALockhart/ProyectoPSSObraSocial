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
    
}

