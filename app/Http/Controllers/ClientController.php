<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{


    public function index()
    {
        $clients = DB::table('clients')
            ->join('users', 'clients.DNI', '=', 'users.DNI')
            ->select('clients.DNI', 'users.firstName', 'users.lastName', 'clients.plan')
            ->get();
    
        return view('empleado.paginaCliente-Empleados', ['clients' => $clients]);
    }
    
}
