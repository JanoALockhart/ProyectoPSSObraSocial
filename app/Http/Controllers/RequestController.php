<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexClientRequests(Request $request)
    {
        $user = Auth::user();
        //dd($user);
        //Obtener el user
        //Obtener el client asociado a ese user
        //Obtener todas las solicitudes de reintegro ese client
        //Obtener todas las solicitudes de prestacion de ese client
        //Devolver la vista con los datos obtenidos
        return view('cliente.solicitudes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.nuevaSolicitud');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        //Verificar los datos del formulario

        //Almacenar el archivo del formulario

        //Almacenar la nueva solicitud
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $vista = null;
        if($id==1){ //TODO: CAMBIAR CONDICION
            $vista = view('cliente.solicitudReintegro');
        }else{
            $vista = view('cliente.solicitudPrestaciones');
        }
        return $vista;
    }
}
