<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showProfile()
    {
        $admin = DB::table('administrators')
            ->join('users', 'administrators.DNI', '=', 'users.DNI')
            ->select('administrators.DNI', 'users.firstName', 'users.lastName', 'users.birthDate', 'users.email', 'users.address', 'users.phone')
            ->where('users.DNI', auth()->user()->DNI)
            ->first();
        
        return view('admin.perfil', compact('admin'));
    }

    public function editProfileForm()
    {
        $admin = DB::table('administrators')
            ->join('users', 'administrators.DNI', '=', 'users.DNI')
            ->select('administrators.DNI', 'users.firstName', 'users.lastName', 'users.email', 'users.address', 'users.phone')
            ->where('users.DNI', auth()->user()->DNI)
            ->first();
        
        return view('admin.editarperfil', compact('admin'));
    }

    public function updateProfile(Request $request)
    {
        $adminDNI = auth()->user()->DNI;

        // Realiza la validación de los datos del formulario aquí

        // Actualiza los datos del empleado en la base de datos
        DB::table('users')
            ->where('DNI', $adminDNI)
            ->update([
                'firstName' => $request->input('firstName'),
                'lastName' => $request->input('lastName'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'phone' => $request->input('phone'),
            ]);

        return redirect()->route('adminProfile')->with('success', 'Perfil actualizado correctamente');
    }
}
