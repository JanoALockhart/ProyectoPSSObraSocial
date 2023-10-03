<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class AdminClienteController extends Controller
{
    public function index()
    {
        $clientes = Client::all();
        return view('admin.adminCliente.index');
    }

    public function details()
    {
        return view('admin.adminCliente.details');
    }

    public function edit()
    {
        return view('admin.adminCliente.edit');
    }

};
