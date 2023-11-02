<?php

namespace App\Http\Controllers;

use App\Models\Prestation;
use Illuminate\Http\Request;
use App\Models\Plan;
use Illuminate\Support\Facades\DB;

class PlanController extends Controller
{
    public function index()
    {
        $planes = Plan::with('prestations')->get(); // Obtener todos los planes
        return view('plan.index', ['planes' => $planes]);
    }

    public function switch(Plan $plan)
    {
        $plan->update(['state' => !$plan->state]);

        return redirect()->back()->with('success', 'El plan se ha actualizado correctamente.');
    }

    public function create()
    {
        return view('plan.create');
    }

    public function store(Request $request)
    {
        // Valida y guarda el plan sin las prestaciones
        $validatedData = $request->validate([
            'name' => 'required|string',
            'min_age' => 'required|integer',
            'max_age' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        // Establece el valor de state en true
        $validatedData['state'] = true;

        // Crea el plan
        $plan = Plan::create($validatedData);

        // Recorre y crea las prestaciones y sus relaciones
        $prestations = $request->input('prestations', []);

        foreach ($prestations as $prestationData) {
            $prestation = new Prestation([
                'name' => $prestationData['name'],
                'percentage' => $prestationData['percentage'],
            ]);

            // Guarda la prestación en la base de datos
            $prestation->save();

            // Obtiene el ID de la prestación recién creada
            $prestationId = $prestation->id;

            // Crea la relación entre el plan y la prestación utilizando SQL
            DB::table('prestation_plan')->insert([
                'prestation_id' => $prestationId,
                'plan_id' => $plan->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('plans.index')->with('success', 'El plan se ha creado correctamente.');
    }

    public function edit(Plan $plan)
    {
        $plan->load('prestations'); // Cargar las prestaciones asociadas al plan
        return view('plan.edit', compact('plan'));
    }

    public function update(Request $request, Plan $plan)
    {
        // Valida los datos actualizados del plan
        $validatedData = $request->validate([
            'name' => 'required|string',
            'min_age' => 'required|integer',
            'max_age' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        // Actualiza los atributos del plan con los datos validados
        $plan->update($validatedData);

        // Actualiza las prestaciones asociadas al plan
        $prestationsData = $request->input('prestations', []);

        foreach ($prestationsData as $prestationId => $prestationAttributes) {
            // Busca la prestación por ID o crea una nueva si es necesario
            $prestation = Prestation::updateOrCreate(['id' => $prestationId], $prestationAttributes);

            // Asocia la prestación al plan
            $plan->prestations()->syncWithoutDetaching([$prestation->id]);
        }

        // Redirecciona de nuevo a la vista de edición con un mensaje de éxito
        return redirect()->route('plans.index', $plan)->with('success', 'El plan se ha actualizado correctamente.');
    }

};
