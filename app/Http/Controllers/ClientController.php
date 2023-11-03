<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{


    public function index()
    {
        $clients = DB::table('clients')
            ->join('users', 'clients.DNI', '=', 'users.DNI')
            ->select('clients.id','clients.DNI', 'users.firstName', 'users.lastName', 'clients.plan')
            ->get();

        return view('empleado.paginaCliente-Empleados', ['clients' => $clients]);
    }

    public function showProfile(){
        $user = Auth::user();
        return view('cliente.clientProfile', ['clientData' => $user]);
    }

}
