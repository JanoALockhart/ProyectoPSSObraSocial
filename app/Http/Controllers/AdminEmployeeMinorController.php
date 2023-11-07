<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Minor18;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plan;
use App\Models\Prestation;


class AdminEmployeeMinorController extends Controller
{
    public function listMinors($id){
        $client = Client::find($id);
        return view('empleado.menoresDeCliente', [
            'clientName' => $this->getClientName($client),
            'clientMinors' => $client->minors()->withTrashed()->orderBy('DNI')->get()
        ]);
    }

    private function getClientName($client){
        $clientData = User::where('DNI', $client->DNI)->first();
        return $clientData->lastName . ", " . $clientData->firstName;
    }

    public function softDeleteMinor($id){
        Minor18::find($id)->delete();
        return back();
    }

    public function restoreMinor($id){
        Minor18::withTrashed()->find($id)->restore();
        return back();
    }

    public function listMinorsAdmin($id){
        $client = Client::find($id);
        return view('admin.menoresDeCliente', [
            'clientName' => $this->getClientName($client),
            'clientMinors' => $client->minors()->withTrashed()->orderBy('DNI')->get()
        ]);
    }

    public function createMinorsAdmin($id){
        $client = Client::find($id);
        $planes = Plan::with('prestations')->get(); // Obtener todos los planes

        return view('admin.crearMenorDeCliente', [
            'clientName' => $this->getClientName($client),
            'clientId' => $id,
            'plans' => $planes
        ]);

    }

    public function storeMinorAdmin(Request $request){

        $request->validate([
            'email' => 'required|email|unique:minor18s',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'birthDate' => 'required|date',
            'phone' => 'required|string',
            'address' => 'required|string',
            'DNI' => 'required|string|unique:minor18s',
        ]);

        $minor = Minor18::create(['DNI'=>$request->DNI, 'firstName' => $request->firstName,
        'lastName'=> $request->lastName, 'birthDate' => $request->birthDate,
        'phone'=> $request->phone, 'address'=>$request->address, 'email'=>$request->email, 'client_id' => $request->clientId
        ]);
        return redirect()->route('admin.showClientMinors', $request->clientId)->with('success', 'El menor se ha creado correctamente.');
    }

    public function createMinorsEmployee($id){
        $client = Client::find($id);
        $planes = Plan::with('prestations')->get(); // Obtener todos los planes

        return view('empleado.crearMenorDeCliente', [
            'clientName' => $this->getClientName($client),
            'clientId' => $id,
            'plans' => $planes
        ]);

    }

    public function storeMinorEmployee(Request $request){

        $request->validate([
            'email' => 'unique:minor18s|required|email',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'birthDate' => 'required|date',
            'phone' => 'required|string',
            'address' => 'required|string',
            'DNI' => 'unique:minor18s|required|string',
        ]);

        $minor = Minor18::create(['DNI'=>$request->DNI, 'firstName' => $request->firstName,
        'lastName'=> $request->lastName, 'birthDate' => $request->birthDate,
        'phone'=> $request->phone, 'address'=>$request->address, 'email'=>$request->email, 'client_id' => $request->clientId
        ]);
        return redirect()->route('empleado.showClientMinors', $request->clientId)->with('success', 'El menor se ha creado correctamente.');
    }
}
