<?php

namespace Database\Seeders;

use App\Models\Administrator;
use App\Models\Client;
use App\Models\Employee;
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
        //Client
        $us = User::create([
            'DNI' => 11111111,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => $faker->boolean,
            'email' => "client@ospifak.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('client'); 

        Client::create([
            'DNI' => 11111111,
            'registration_date' => $faker->date,
            'plan' => $faker->randomElement(['Bronce', 'Plata', 'Oro']),
        ]);


        //Employee
        $us = User::create([
            'DNI' => 22222222,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => true,
            'email' => 'employee@ospifak.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('employee');

        Employee::create([
            'DNI' => 22222222,
            'registration_date'=> today()
        ]);

        $us = User::create([
            'DNI' => 44444444,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => false,
            'email' => 'employee2@ospifak.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('employee');

        Employee::create([
            'DNI' => 44444444,
            'registration_date'=> today()
        ]);

        //Administrator
        $us = User::create([
            'DNI' => 33333333,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => $faker->boolean,
            'email' => 'admin@ospifak.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('admin');

        Administrator::create([
            'DNI' => 33333333,
        ]);

    }
}


