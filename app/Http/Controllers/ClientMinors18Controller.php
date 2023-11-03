<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientMinors18Controller extends Controller
{
    public function showMinors(){
        $client = $this->getLoggedClient();
        $minors = $client->minors;

        return view('cliente.minors', [
            'clientMinors' => $minors
        ]);
    }

    private function getLoggedClient(){
        return Client::where('DNI', Auth::user()->DNI)->first();
    }
}
