<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
use Auth;

class PDFController extends Controller
{
    public function getPdf(Request $request){
        $user = Auth::user();

        // Check if a user is authenticated
        if ($user) {
            // User is authenticated, add user name and ID to the data
            $data = [
                'title' => 'Hola',
                'userName' => $user->firstName . ' ' . $user->lastName,
                'userId' => $user->user_id,
                'dni' => $user->DNI
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
}

