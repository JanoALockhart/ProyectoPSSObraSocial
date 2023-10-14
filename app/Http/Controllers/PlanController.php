<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class PlanController extends Controller
{
    public function index()
    {
        $planes = Plan::all(); // Obtener todos los planes
        return view('plan.index', ['planes' => $planes]);
    }

    public function disable(Plan $plan)
    {
        $plan->update(['state' => !$plan->state]);

        return redirect()->back()->with('success', 'El plan se ha actualizado correctamente.');
    }

};
