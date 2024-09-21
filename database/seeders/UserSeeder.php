<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (!User::where('email', 'matheus57.ruiz100@outlook.com')->first()) {
            User::create([
                'name'              => 'Matheus Felipe Ruiz Gonçalves',
                'email'             => 'matheus57.ruiz100@outlook.com',
                'role_id'           => 1,
                'password'          => bcrypt('12345678'),
                'email_verified_at' => now(),
                'phone_number'      => '44998254962',
            ]);
        }

        if (!User::where('email', 'matiasplays100@gmail.com')->first()) {
            User::create([
                'name'              => 'Matias Gonçalves',
                'email'             => 'matiasplays100@gmail.com',
                'role_id'           => 2,
                'password'          => bcrypt('12345678'),
                'email_verified_at' => now(),
            ]);
        }

        if (!User::where('email', 'matheus57.ruiz100@gmail.com')->first()) {
            User::create([
                'name'              => 'Matheus Efrens Inácio',
                'email'             => 'matheus57.ruiz@gmail.com',
                'role_id'           => 3,
                'password'          => bcrypt('12345678'),
                'email_verified_at' => now(),
            ]);
        }
    }
}