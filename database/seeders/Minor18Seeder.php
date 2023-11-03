<?php

namespace Database\Seeders;

use App\Models\Minor18;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Minor18Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Minor18::factory()->count(10)->create();
    }
}
