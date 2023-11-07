<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Plan;
use App\Models\User;

class AdminClienteController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('admin.adminCliente.index', compact('clients'));
    }

    public function details($DNI)
    {
        $client = Client::where('DNI', $DNI)->first();
        return view('admin.adminCliente.details', compact('client'));
    }

    public function edit($DNI)
    {
        $client = Client::where('DNI', $DNI)->first();

        $clientPlan = $client->plan;
        $plans = Plan::all();

        return view('admin.adminCliente.edit', compact('client', 'plans', 'clientPlan'));
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
            'DNI' => 'required|numeric',
            'plan' => 'required|string'
        ]);

        $client = Client::where('DNI', $request->query('DNI'))->firstOrFail();

        $client->user->update([
            'DNI' => $request->input('DNI'),
            'email' => $request->input('email'),
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'birthDate' => $request->input('birthDate'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address')
        ]);

        $client->update([
            'DNI' => $request->input('DNI'),
            'plan' => $request->input('plan'),
            'registration_date' => $client->registration_date
        ]);

     
        return redirect()->route('admin.adminCliente.details', ['client' => $client->DNI]);
                
    }
    

};
