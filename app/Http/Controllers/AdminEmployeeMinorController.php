<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Minor18;
use Illuminate\Http\Request;
use App\Models\User;

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
}
