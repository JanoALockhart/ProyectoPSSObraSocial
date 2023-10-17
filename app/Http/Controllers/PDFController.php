<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use Auth;

class PDFController extends Controller
{
    public function getPdfMensual(Request $request){
        $user = Auth::user();
        

        // Check if a user is authenticated
        if ($user) {
            $plan = $user->client->plan;
            if ($plan === 'Bronce') {
                $monto = 100;
            } elseif ($plan === 'Plata') {
                $monto = 200;
            } elseif ($plan === 'Oro') {
                $monto = 300;
            } else {
                $monto = 0; // Default monto for unknown plans
            }
            // User is authenticated, add user name and ID to the data
            $data = [
                'title' => 'Mensual',
                'userName' => $user->firstName . ' ' . $user->lastName,
                'userId' => $user->user_id,
                'dni' => $user->DNI,
                'plan' => $plan,
                'monto' => $monto
            ];
        } else {
            // User is not authenticated, provide default data
            $data = [
                'title' => 'Hola',
                'userName' => 'Guest',
                'userId' => null
            ];
        }

        $pdf = PDF::loadView('cliente.hacerPDF', $data);
        return $pdf->download('cupon.pdf');
    }

    public function getPdfAnual(Request $request){
        $user = Auth::user();
        

        // Check if a user is authenticated
        if ($user) {
            $plan = $user->client->plan;
            if ($plan === 'Bronce') {
                $monto = 100;
            } elseif ($plan === 'Plata') {
                $monto = 200;
            } elseif ($plan === 'Oro') {
                $monto = 300;
            } else {
                $monto = 0; // Default monto for unknown plans
            }
            // User is authenticated, add user name and ID to the data
            $data = [
                'title' => 'Anual',
                'userName' => $user->firstName . ' ' . $user->lastName,
                'userId' => $user->user_id,
                'dni' => $user->DNI,
                'plan' => $plan,
                'monto' => $monto*12
            ];
        } else {
            // User is not authenticated, provide default data
            $data = [
                'title' => 'Hola',
                'userName' => 'Guest',
                'userId' => null,
                'monto' => 0
            ];
        }

        $pdf = PDF::loadView('cliente.hacerPDF', $data);
        return $pdf->download('cupon.pdf');
    }
}

