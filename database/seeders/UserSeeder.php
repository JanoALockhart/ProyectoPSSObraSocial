<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@osfak.com',
            'password' => Hash::make('123')
        ])->assignRole('admin');


        User::factory()->create([
            'name' => 'Employee',
            'email' => 'employee@osfak.com',
            'password' => Hash::make('123')
        ])->assignRole('employee');
    }
}
