<?php

namespace Database\Seeders;

use App\Models\Administrator;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Minor18;
use App\Models\Request;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class RandomUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $createSingleClient = function($dni){
            $client = Client::create([
                'DNI' => $dni,
                'registration_date' => fake()->date(),
                'plan' => fake()->randomElement(['Bronce', 'Plata', 'Oro']),
            ]);

            $this->assignRequests($client, 20);
            $this->assignMinors($client, 10);
        };

        $createSingleAdmin = function($dni){
            Administrator::create([
                'DNI' => $dni,
            ]);
        };

        $createSingleEmployee = function($dni){
            Employee::create([
                'DNI' => $dni,
                'registration_date'=> today()
            ]);
        };

        $this->createUsers(20, $createSingleClient, 'client');
        $this->createUsers(3, $createSingleAdmin, 'admin');
        $this->createUsers(10, $createSingleEmployee, 'employee');
    }

    /**
     * '9' y 'm' para que no colisione con los 3 dnis y mails que ya teniamos e UserSeeder
     */
    private function createUsers($amount, $modelFunction, $rol){
        for($i=0; $i<$amount; $i++){
            $dni = '9' . fake()->unique()->numerify('#######');
            $mail = 'm' . fake()->unique()->firstName() . '@ospifak.com';
            $this->createUserWithRole($dni, $mail, $rol);
            $modelFunction($dni);
        }
    }

    private function createUserWithRole($dni, $mail, $rol){
        User::create([
            'DNI' => $dni,
            'firstName' => fake()->firstName(),
            'lastName' => fake()->lastName(),
            'birthDate' => fake()->date(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'state' => true,
            'email' => $mail,
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
        ])->assignRole($rol);
    }

    private function assignRequests($client, $amount){
        for($i=0; $i<$amount; $i++){
            Request::create([
                'type' => fake()->randomElement(['Reintegro','Prestacion']),
                'date' => date("Y-m-d"),
                'CBU' => fake()->numerify('######################'),
                'recipient_DNI' => fake()->numerify('########'),
                'recipient_name' => fake()->name(),
                'recipient_last_name' => fake()->lastName(),
                'request_image_path' => 'img_solicitudes/solicitud_1697336283_11111111.jpg',
                'state' => fake()->randomElement(['Pendiente','Aprobado','Desaprobado']),
                'amount' => fake()->randomFloat(2,10,1000000),
                'description' => fake()->sentence(),
                'client_id' => $client->id,
            ]);
        }
    }

    private function assignMinors($client, $amount){
        for($i=0; $i<$amount; $i++){
            DB::table('minor18s')->insert([
                'DNI' => fake()->unique()->numerify('########'),
                'firstName' => fake()->name(),
                'lastName' => fake()->lastName(),
                'birthDate' => fake()->date(),
                'phone' => fake()->numerify('### #######'),
                'address' => fake()->address(),
                'email' => fake()->unique()->email(),
                'deleted_at' => fake()->randomElement([null, now()]),
                'client_id' => $client->id
            ]);
        }
    }


}
