<?php

namespace Database\Seeders;

use App\Models\Request as ModelsRequest;
use Illuminate\Database\Seeder;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsRequest::factory()->count(20)->create();
    }
}
