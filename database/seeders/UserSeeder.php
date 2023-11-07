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
            'state' => true,
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

        $us = User::create([
            'DNI' => 42293176,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => true,
            'email' => "lucioadriell@ospifak.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('client'); 

        Client::create([
            'DNI' => 42293176,
            'registration_date' => $faker->date,
            'plan' => $faker->randomElement(['Bronce', 'Plata', 'Oro']),
        ]);

        $us = User::create([
            'DNI' => 39483268,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => true,
            'email' => "juan@ospifak.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('client'); 

        Client::create([
            'DNI' => 39483268,
            'registration_date' => $faker->date,
            'plan' => $faker->randomElement(['Bronce', 'Plata', 'Oro']),
        ]);

        $us = User::create([
            'DNI' => 42397893,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => true,
            'email' => "david@ospifak.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('client'); 

        Client::create([
            'DNI' => 42397893,
            'registration_date' => $faker->date,
            'plan' => $faker->randomElement(['Bronce', 'Plata', 'Oro']),
        ]);

        $us = User::create([
            'DNI' => 12345678,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => true,
            'email' => "jorge@ospifak.com",
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('client'); 

        Client::create([
            'DNI' => 12345678,
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

        $us = User::create([
            'DNI' => 55555555,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => true,
            'email' => 'employee3@ospifak.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('employee');

        Employee::create([
            'DNI' => 55555555,
            'registration_date'=> today()
        ]);

        $us = User::create([
            'DNI' => 9273456,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => true,
            'email' => 'employee4@ospifak.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('employee');

        Employee::create([
            'DNI' => 9273456,
            'registration_date'=> today()
        ]);

        $us = User::create([
            'DNI' => 35678987,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => true,
            'email' => 'employee5@ospifak.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('employee');

        Employee::create([
            'DNI' => 35678987,
            'registration_date'=> today()
        ]);

        $us = User::create([
            'DNI' => 98765432,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'birthDate' => $faker->date,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'state' => true,
            'email' => 'employee9@ospifak.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole('employee');

        Employee::create([
            'DNI' => 98765432,
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
            'state' => true,
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


