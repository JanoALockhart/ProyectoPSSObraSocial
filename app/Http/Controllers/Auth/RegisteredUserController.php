<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Plan;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $planes = Plan::with('prestations')->get(); // Obtener todos los planes
        return view('auth.register', ['planes' => $planes]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        //dd($request);
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'DNI' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'birthDate' => ['required', 'date'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'plan' => ['required', 'string'],
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'DNI' => $request->DNI,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'birthDate' => $request->birthDate,
            'phone' => $request->phone,
            'address' => $request->address,
            'state' => true
        ])->assignRole('client');

        event(new Registered($user));

        
        $client = Client::create([
            'DNI' => $user->DNI,
            'registration_date' => now(),
            'plan' => $request->plan
        ]);

        event(new Registered($client));
        
        return redirect()->route('empleado.paginaCliente-Empleados');
    }
}
