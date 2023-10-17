<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;
use App\Models\Prestation;

class PlanSeeder extends Seeder
{
    public function run()
    {
        // Crear una prestación
        $prestation = Prestation::create([
            'name' => 'Nombre de la Prestación',
            'percentage' => 10, // Cambia esto al valor deseado
        ]);

        $prestation2 = Prestation::create([
            'name' => 'Nombre de la Prestación2',
            'percentage' => 10, // Cambia esto al valor deseado
        ]);

        // Asignar la prestación al primer plan
        $plan1 = Plan::create([
            'name' => '1',
            'min_age' => 1,
            'max_age' => 2,
            'state' => 1,
            'price' => 105.6,
        ]);
        $plan1->prestations()->attach($prestation->id);

        // Asignar la prestación al segundo plan
        $plan2 = Plan::create([
            'name' => '2',
            'min_age' => 4,
            'max_age' => 7,
            'state' => 0,
            'price' => 1.6,
        ]);
        $plan2->prestations()->attach($prestation2->id);
    }
}
