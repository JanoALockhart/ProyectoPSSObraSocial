<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-users']);
        Permission::create(['name' => 'edit-users']);
        Permission::create(['name' => 'delete-users']);

        Permission::create(['name' => 'modify-basic-fields']);
        Permission::create(['name' => 'modify-advanced-fields']);

        $adminRole = Role::create(['name' => 'admin']);
        $employeeRole = Role::create(['name' => 'employee']);
        $clientRole = Role::create(['name' => 'client']);


        $adminRole->givePermissionTo([
            'create-users',
            'edit-users',
            'delete-users',
            'modify-basic-fields',
            'modify-advanced-fields',
        ]);

        $employeeRole->givePermissionTo([
            'modify-basic-fields',
        ]);

        $clientRole->givePermissionTo([
            'modify-basic-fields',
        ]);
    }





}
