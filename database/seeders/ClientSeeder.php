<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\User;
use Faker\Factory as Faker;
use Spatie\Permission\Models\Role;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create();

        // $userDNIs = User::pluck('DNI')->toArray();

        // foreach (range(1, 10) as $index) {
        //     $randomDNI = $faker->unique()->randomElement($userDNIs);

        //     Client::create([
        //         'DNI' => $randomDNI,
        //         'registration_date' => $faker->date,
        //         'plan' => $faker->randomElement(['Bronce', 'Plata', 'Oro']),
        //     ])->assignRole('client');
        // }
    }
}
