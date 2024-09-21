<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (!Role::where('name', 'admin')->first()) {
            Role::create(['name' => 'admin']);
        }

        if (!Role::where('name', 'employee')->first()) {
            Role::create(['name' => 'employee']);
        }

        if (!Role::where('name', 'customer')->first()) {
            Role::create(['name' => 'customer']);
        }
    }
}