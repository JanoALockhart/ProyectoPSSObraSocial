<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            $us = User::create([
                'DNI' => $faker->unique()->numerify('########'),
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'birthDate' => $faker->date,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'state' => $faker->boolean,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password'), // Puedes ajustar la contraseña según sea necesario
                'remember_token' => Str::random(10),
            ]);
        }

    }
}


