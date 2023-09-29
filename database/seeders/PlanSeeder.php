<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    public function run()
    {
        Plan::create([
            'name' => '1',
            'min_age' => 1,
            'max_age' => 2,
            'state' => 1,
        ]);

        Plan::create([
            'name' => '2',
            'min_age' => 4,
            'max_age' => 7,
            'state' => 0,
        ]);

        // Agrega más planes si es necesario
    }
}