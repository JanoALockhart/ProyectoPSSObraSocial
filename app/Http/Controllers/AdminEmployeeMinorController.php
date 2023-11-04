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

    public function storeMinor(Request $request){

        $request->validate([
            'email' => 'required|email',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'birthDate' => 'required|date',
            'phone' => 'required|string',
            'address' => 'required|string',
            'DNI' => 'required|string',
        ]);

        $minor = Minor18::create(['DNI'=>$request->DNI, 'firstName' => $request->firstName,
        'lastName'=> $request->lastName, 'birthDate' => $request->birthDate,
        'phone'=> $request->phone, 'address'=>$request->address, 'email'=>$request->email, 'client_id' => $request->clientId
        ]);

        return redirect()->route('admin.showClientMinors', $request->clientId)->with('success', 'El plan se ha creado correctamente.');
    }
}
