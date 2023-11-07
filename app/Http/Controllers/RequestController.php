<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexClientRequests(Request $request)
    {
    
        //Obtener el cliente loggeado y sus solicitudes
        $client = $this->getLoggedClient();
        $clientRequests = $client->requests->reverse();

        //Obtener todas las solicitudes de reintegro ese client
        $refundRequest = $clientRequests->filter( function ($oneRequest) {
            return $oneRequest['type']=='Reintegro';
        });

        //Obtener todas las solicitudes de prestacion de ese client
        $benefitRequest = $clientRequests->filter( function ($oneRequest) {
            return $oneRequest['type']=='Prestacion';
        });

        //Devolver la vista con los datos obtenidos
        return view('cliente.solicitudes', [
            'refundRequests' => $refundRequest,
            'benefitRequests' => $benefitRequest,
        ]);
    }

    private function getLoggedClient(){
        return Client::where('DNI', Auth::user()->DNI)->first();
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
        //Verificar los datos del formulario
        $validationRules = [
            'requestType' => ['required',Rule::in(['Reintegro','Prestacion'])],
            'CBU' => ['required','string','regex:/^\d+$/','size:22'],
            'recipient_DNI' =>['required','string','regex:/^\d+$/'],
            'recipient_name' => ['required','string'],
            'recipient_last_name' => ['required','string'],
            'amount'=> ['required','string','decimal:0,2'],
            'image' => ['required','image'],
            'description' => ['string','nullable'],
        ];

        $validationMessages = [
            'requestType' => 'El tipo de la solicitud debe ser "Reintegro" o "Prestacion"',
            'CBU.required' => 'El CBU es obligatorio',
            'CBU.regex' => 'El CBU debe ser un numero de 22 cifras',
            'CBU.size' => 'El CBU debe tener 22 cifras',
            'recipient_DNI.required' => 'El DNI del destinarario es obligatorio',
            'recipient_DNI.regex' => 'El DNI del destinatario debe ser un numero',
            'recipient_name' => 'El nombre del destinatario es obligatorio',
            'recipient_last_name' => 'El apellido del destinatario es obligatorio',
            'image' => 'Debe cargar una imagen (png, jpg, jpeg,...)',
            'amount' => 'El monto debe ser un valor valido',
        ];

        $validator = Validator::make($request->all(), $validationRules, $validationMessages);
        $request->validate([
            'image' => 'required|image',
        ]);

        $validated = $validator->validated();

        //dd($validated);
        //Almacenar el archivo del formulario
        $user = Auth::user();
        $newImageName = 'solicitud_' . time() . '_' . $user->DNI . '.' . $validated['image']->extension();
        $imagePath = 'img_solicitudes/' . $newImageName;
        $validated['image']->move(public_path('img_solicitudes'), $newImageName);

        //Almacenar la nueva solicitud
        $loggedClient = $this->getLoggedClient();

        $descriptionText = "";
        if($validated['description']!=null){
            $descriptionText = $validated['description'];
        }

        $clientRequest = ModelsRequest::create([
            'type' => $validated['requestType'],
            'date' => date("Y-m-d"),
            'CBU' => $validated['CBU'],
            'recipient_DNI' => $validated['recipient_DNI'],
            'recipient_name' => $validated['recipient_name'],
            'recipient_last_name' => $validated['recipient_last_name'],
            'request_image_path' => $imagePath,
            'state' => 'Pendiente',
            'amount' => $validated['amount'],
            'description' => $descriptionText,
            'client_id' => $loggedClient->id,
        ]);

        return view('cliente.message');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $clientRequest = ModelsRequest::find($id);
        $vista=null;
        if($clientRequest['type']=='Reintegro'){
            $vista = view('cliente.solicitudReintegro', ['refundRequest' => $clientRequest]);
        }else if($clientRequest['type']=='Prestacion'){
            $vista = view('cliente.solicitudPrestaciones', ['benefitRequest' => $clientRequest]);
        }
        return $vista;
    }

    /**
 * Display a listing of all client requests.
 */
public function indexAllClientRequests(Request $request)
{
    $user = Auth::user();
    $role = $user->getRoleNames()->first();
    // Obtener todas las solicitudes de reintegro
    $refundRequests = ModelsRequest::where('type', 'Reintegro')->get();

    // Obtener todas las solicitudes de prestación
    $benefitRequests = ModelsRequest::where('type', 'Prestacion')->get();

    if ($role === "employee")
        return view('empleado.solicitudes', [
            'refundRequests' => $refundRequests,
            'benefitRequests' => $benefitRequests,
        ]);

    return view('admin.solicitudes', [
        'refundRequests' => $refundRequests,
        'benefitRequests' => $benefitRequests,
    ]);
    
}

}
